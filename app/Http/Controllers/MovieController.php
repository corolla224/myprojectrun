<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 *
 */
class MovieController extends Controller
{

  function __construct()
  {
    # code...
  }
  public function index ()
  {
      return "Hello From Movie Controller";
  }
  public function view ()
  {
      return "Hello From Movie Controller View Method";
  }
}
