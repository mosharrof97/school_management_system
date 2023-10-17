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
        $student = new StudentModel;
        $studentpays= $payment->join('student', 'student.student_id = payment.student')->join('course', 'course.course_id = payment.course_id')->join('batch', 'batch.batch_id = payment.batch_id')->join('branch', 'branch.branch_id = payment.branch_id')
        ->orderby('payment_id','DESC')->paginate(4, 'group');

        $newStudentPays = array_map(function ($studentpay) use($payment){
            $studentId = $studentpay['student'];
            $paymentSum = $payment->where('student', $studentId)->selectSum('payment','sum')->first();
            $studentpay['totalPayment'] = $paymentSum['sum'];
            return $studentpay;
        },$studentpays);

        // print_r($newStudentPays);
        $data=[
            'page_title'=>'All Payment',
            'page_heading' => 'All Payment',
            'payments' => $newStudentPays,
            // 'sum' => $payment->where('student')->selectSum('payment', 'sumQuantities')->get()->getRow()->sumQuantities,
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
            $course_id = $this->request->getPost('course_id');
            $batch_id = $this->request->getPost('batch_id');
            $branch_id = $this->request->getPost('branch_id');

            $formData = [
                'payment'=> $payment_input,
                'student'=> $student_id,
                'course_id'=> $course_id,
                'batch_id'=> $batch_id,
                'branch_id'=> $branch_id,
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
            'payment' => $payment->join('student',  'student.student_id = payment.student')->join('course', 'course.course_id = payment.course_id')->where('payment_id', $id)->first(),
            'sum' => $payment->where('student', $id)->selectSum('payment', 'sumQuantities')->get()->getRow()->sumQuantities,
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
            'student' => $payment->join('student',  'student.student_id = payment.student')->join('course', 'course.course_id = payment.course_id')->where('student', $id)->first(),
            
            'sum' => $payment->where('student', $id)->selectSum('payment', 'sumQuantities')->get()->getRow()->sumQuantities,
         ];
        return View('dashboard/page/payment/viewpayment', $data);
    }

}
