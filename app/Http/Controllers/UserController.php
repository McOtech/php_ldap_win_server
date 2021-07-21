<?php

namespace App\Http\Controllers;

use App\Http\Traits\AD\User;
use App\Http\Traits\Utils;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    use Utils, User;

    public function profile(Request $request)
    {
        try {
            $auth = $request->session()->get('auth');

            try {
                $username = $auth['username'];
                $password = Crypt::decrypt($auth['password']);
            } catch (DecryptException $th) {
                $message = new MessageBag($this->alert(env('ERROR_MESSAGE'), $th->getMessage()));;
                return redirect()->back()->withErrors($message);
            }

            $connection = $this->bindUser($username, $password);
            if (!isset($connection[env('MESSAGE_LITERAL')])) {
                $profile = $this->showProfile($connection, $username);
                if (isset($profile[0])) {
                    $user = $this->getUserProfile($profile[0]);
                    $request->session()->put('user', [
                        'email' => (isset($user['mail'])) ? $user['mail'] : '',
                        'fname' => (isset($user['givenname'])) ? $user['givenname'] : '',
                        'sname' => (isset($user['sn'])) ? $user['sn'] : ''
                    ]);
                    return view('portal.profile', ['user' => $user]);
                }
                $message = new MessageBag($this->alert(env('ERROR_MESSAGE'), 'Error retreiving user profile!'));
                return redirect()->back()->withErrors($message);
            }
            $message = new MessageBag($this->alert(env('ERROR_MESSAGE'), 'Unable to bind to the server!'));
            return redirect()->back()->withErrors($message);
        } catch (\Throwable $th) {
            $message = new MessageBag($this->alert(env('ERROR_MESSAGE'), $th->getMessage()));
            return redirect()->back()->withErrors($message);
        }
    }

    public function settings(Request $request)
    {
        return view('portal.settings');
    }

    public function users(Request $request)
    {
        // $d = $request->input('r');
        return view('portal.users.index');
    }
}
