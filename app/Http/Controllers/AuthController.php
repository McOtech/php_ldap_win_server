<?php

namespace App\Http\Controllers;

use App\Http\Traits\AD\User;
use App\Http\Traits\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    use Utils, User;

    public function register(Request $request) {
        return view('auth.register');
    }

    public function login(Request $request) {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => ['required', 'string'],
            'email' => ['required', 'email'],
            'mobile' => ['required', 'string', 'max:20'],
            'password' => ['required', 'confirmed', 'string']
        ]);

        try {
            // Check to ascertain user records
            $flag = 'student';
            $user = Http::post(env('USER_VERIFICATION_URL') . "/students", [
                "regno" => $data['id']
            ]);
            if (!isset($user['fname'])) {
                $user = Http::post(env('USER_VERIFICATION_URL') . "/staff", [
                    "payroll" => $data['id']
                ]);
                $flag = 'staff';
            }

            if (isset($user['fname'])) {
                // Set the relevant OU
                $groups = ($flag == 'student') ? [env('LDAP_STUDENT_OU')] : [env('LDAP_STAFF_OU')];

                $user = $this->prepareUserAccountDetails(
                    $this->preparedStringLiteral($user['fname']),
                    $this->preparedInitial($user['lname']),
                    $this->preparedStringLiteral($user['sname']),
                    trim(($flag == 'student') ? strtolower(str_replace('/', '_', $user['regno'])) : strtolower(str_replace('/', '_', $user['payroll']))),
                    $data['password'],
                    strtolower($data['email']),
                    $data['mobile'],
                    $groups,
                    []
                );

                if (!isset($user[env('MESSAGE_LITERAL')])) {
                    $message = new MessageBag($this->addUser($user['cn'][0], $user, $groups));
                    return redirect()->route('login.get')->withErrors($message);
                } else {
                    $message = new MessageBag($user);
                    return redirect()->back()->withErrors($message);
                }
            } else {
                $message = new MessageBag($this->alert(env('WARNING_MESSAGE'), "Invalid Registration/Payroll Number! Please check and try again."));
                return redirect()->back()->withErrors($message);
            }
        } catch (\Throwable $th) {
            $message = new MessageBag($this->alert(env('ERROR_MESSAGE'), $th->getMessage()));
            return redirect()->back()->withErrors($message);
        }
    }
}