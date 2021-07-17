<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationUnitController extends Controller
{
    public function index() {
        return view('portal.ous.index');
    }
}