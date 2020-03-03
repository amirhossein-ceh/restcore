<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index()
    {
      return View::renderTemplate("index");
    }
}
