<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
       return View('frontend/page/home');
    }
}
