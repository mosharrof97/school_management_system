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
            'payments' => $payment->join('student', 'student.student_id = payment.student')->orderby('payment_id','DESC')->paginate(4, 'group'),
            'pager' => $payment->pager,
        ];
        return View("dashboard/page/payment/allpayment", $data);
        
    }

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
                'student'=> $student_id
            ];

            $payment->insert($formData);
            return redirect()->to('dashboard/all_payment');
        }
    }


    //View single Payment
    public function singlepayment($id){
        $payment= new PaymentModel();
        
        $data=[
            "page_title"=>"pay slip",
            "page_heading" =>"pay slip",
            'payment' => $payment->join('student',  'student.student_id = payment.student')->where('payment_id', $id)->first(),
         ];
        return View('dashboard/page/payment/singlepayment', $data);
    }


    //View All Payment
    public function viewpayment($id){
        $payment= new PaymentModel();
        
        $data=[
            "page_title"=>"View All Payment",
            "page_heading" =>"View All Payment ",
            'payments' => $payment->join('student',  'student.student_id = payment.student')->where('student', $id)->findAll(),
            'student' => $payment->join('student',  'student.student_id = payment.student')->where('student', $id)->first(),
            'sum' => $payment->where('student', $id)->selectSum('payment', 'sumQuantities')->get()->getRow()->sumQuantities,
         ];
        return View('dashboard/page/payment/viewpayment', $data);
    }

}
