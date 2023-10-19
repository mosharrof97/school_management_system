<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HomeSliderModel;

class HomeController extends BaseController
{
    public function index()
    {
        
        $homeslider= new HomeSliderModel();
        $data = [
            'homesliders'=> $homeslider->findAll()
        ];
        return view('frontend\page\home.php', $data);
    }
}
