<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentController extends BaseController
{
    public function index()
    {
        
    }

    public function addpayment(){
         
        $data=[
            'page_title'=>'Add Payment',
            'page_heading' => 'Add Payment',
            'payment'=>"",
        ];

        return View("dashboard/page/payment/addpayment", $data);
    }
}
