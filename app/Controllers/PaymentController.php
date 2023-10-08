<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaymentModel;
use App\Models\StudentModel;

class PaymentController extends BaseController
{
    public function index()
    {
        $payment = new PaymentModel;
        $data=[
            'page_title'=>'All Payment',
            'page_heading' => 'All Payment', 
            'payments' => $payment->join('student', 'student.student_id = payment.student_id')->orderby('payment.student_id','DESC')->paginate(4, 'group'),
            'pager' => $payment->pager,
        ];
        return View("dashboard/page/payment/allpayment", $data);
        
        
    }


     //Payment 
    //  public function payment($id)
    //  {
    //     $payment= new PaymentModel();
    //      $student= new StudentModel();
    //      $data=[
    //          "page_title"=>"Add Payment",
    //          "page_heading" =>"Add Payment",
    //          'student' => $payment->select('payment.*')->join('student',  'student.student_id = payment.student_id'),  
    //      ];
    //      return View('dashboard/page/payment/addpayment', $data);
    //  }

    //Add Payment
    public function addpayment(){
        
        $payment = new PaymentModel;
        $data=[
            'page_title'=>'Add Payment',
            'page_heading' => 'Add Payment',
        ];
        if($this->request->getMethod() == 'post'){
            $payment_input = $this->request->getPost('payment');
            $student_id = $this->request->getPost('student_id');

            $formData = [
                'payment'=> $payment_input,
                'student_id'=> $student_id
            ];

            $payment->insert($formData);
            return redirect()->to('dashboard/all_payment');
        }


    }

}
