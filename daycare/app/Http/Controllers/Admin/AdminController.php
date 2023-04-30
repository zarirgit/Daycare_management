<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function panel(){
        return view('admin.panel');
    }
}
