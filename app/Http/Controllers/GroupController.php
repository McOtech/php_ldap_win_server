<?php

namespace App\Http\Controllers;

use App\Http\Traits\AD\Group;
use App\Http\Traits\AD\User;
use App\Http\Traits\Utils;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\MessageBag;

class GroupController extends Controller
{
    use Utils, User, Group;

    public function index(Request $request)
    {
        try {
            $offset = $request->input('offset', 0);
            $size = $request->input('size', 4);

            $auth = $request->session()->get('auth');
            try {
                $username = $auth['username'];
                $password = Crypt::decrypt($auth['password']);
            } catch (DecryptException $th) {
                $message = new MessageBag($this->alert(env('ERROR_MESSAGE'), $th->getMessage()));
                return redirect()->back()->withErrors($message);
            }
            $connection = $this->bindUser($username, $password);
            if (!isset($connection[env('MESSAGE_LITERAL')])) {
                $res = $this->showGroups($connection, $offset, $size);
                $groups = $res['groups'];
                $request->input('offset', $res['offset']);

                if (!isset($groups[env('MESSAGE_LITERAL')])) {
                    // dd($groups);
                    return view('portal.groups.index', [
                        'groups' => $groups
                    ]);
                }
                $message = new MessageBag($groups);
                return redirect()->back()->withErrors($message);
            }
            return response()->json($this->alert(env('ERROR_MESSAGE'), 'Unable to bind to the server!'), 400);
        } catch (\Throwable $th) {
            return response()->json($this->alert(env('ERROR_MESSAGE'), $th->getMessage()), 400);
        }
    }
}
