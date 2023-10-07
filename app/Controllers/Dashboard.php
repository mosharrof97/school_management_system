<?php

namespace App\Controllers;

class Dashboard extends BaseController 
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
