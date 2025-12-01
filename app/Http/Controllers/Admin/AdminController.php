<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Auth\LoginController;

class AdminController extends Controller
{
    public function index()
    {
      return view('index');
    }
}
