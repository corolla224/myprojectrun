<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laravel5;

class TodoController extends Controller
{
    public function index()
    {
      $laravel5 = laravel5::first();

      return view('laravel5.index', ['laravel5'=>$laravel5] );
    }
}
