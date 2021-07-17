<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(Request $request) {
        return view('portal.profile');
    }

    public function settings(Request $request) {
        return view('portal.settings');
    }

    public function users(Request $request) {
        // $d = $request->input('r');
        return view('portal.users.index');
    }
}