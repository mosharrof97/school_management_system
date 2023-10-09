<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController 
{
    public function index(): string
    {
        $data=[
            "page_title"=> "Welcome to Codelgniter",
            "page_heading"=> " Codelgniter4"
        ];
        return view('dashboard/page/dashboard', $data);
        
    }
    
}