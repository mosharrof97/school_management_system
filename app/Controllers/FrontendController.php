<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogoModel;
use App\Models\HomeSliderModel;

class FrontendController extends BaseController
{
    public function logoView()
    {
        $logo = new LogoModel();
        $data = [
            "page_title"=> "Logo",
            "page_heading"=> " Logo",
            'logos'=> $logo->findAll()
        ];
        return view('dashboard/frontend_page/logo_slider/logo_slider', $data);
    }

    public function dashboard_logo()
    {
        $logo = new LogoModel();
        $data = [
            'logo'=> $logo->findAll(),
        ];
        return view('', $data);
    }

    public function frontend_logo()
    {
        $logo = new LogoModel();
        $data = [
            'logo'=> $logo->findAll()
        ];
        return view('', $data);
    }

    public function logoEdit($id)
    {
        $logo = new LogoModel();
        $data = [
            "page_title"=> "Add Logo",
            "page_heading"=> " Add Logo",
            'logo'=> $logo->where('logo_id', $id)->first()
        ];
        return View('dashboard/frontend_page/logo_slider/add_logo', $data);
    }

    public function logoUpdate($id)
    {
        $logo = new LogoModel();
        if ($this->request->getMethod() == "post") {

            $validation =  \Config\Services::validation();
            $validation->setRules([
                'logoImage' => [
                    'label' => 'logoImage',
                    'rules' => [
                        'uploaded[logoImage]',
                        'is_image[logoImage]',
                        'mime_in[logoImage,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                        'max_size[logoImage,100]',
                        'max_dims[logoImage,1024,768]',
                    ],
                ],
                
            ]);

            $image = $this->request->getFile('logoImage');
            $imageName = $image-> getRandomName();

            $myData=[
                "logoImage"=>$image,
            ];

            if($validation->run($myData)){

                $fromData = [
                    'logo_image' => $imageName ,
                ];
                $image ->move('uploads/logo', $imageName );
                $logo->update($id, $fromData );
                $session =  session();
                $session->setFlashData("success", "Uplode Successful ");
                return redirect()->to("/dashboard/logo_slider_view");
            }
        }
    }


    
    
    //Home Bannar Slider

    //All Slider Content View
    public function allSliderContent()
    {
        $homeslider = new HomeSliderModel;
        $data=[
            "page_title"=> "All Slider Content",
            "page_heading"=> "All Slider Content",
            'homesliders' => $homeslider->orderby('slider_id','DESC')->paginate(15, 'group'),
            'pager' => $homeslider->pager,
        ];
        return view('dashboard/frontend_page/logo_slider/slider_content',$data);
    }

    //Add Student
    public function addslider()
    {
        $homeslider= new HomeSliderModel();
        $data=[
            "page_title"=>"Add Slider Content",
            "page_heading" =>"Add Slider Content",
        ];

        if($this->request->getMethod() == 'post'){

            $validation =  \Config\Services::validation();

            $validation->setRules([
                "sub-title" => [
                    "label" => "sub-title", 
                    "rules" => "required|min_length[5]|max_length[50]"
                ],
                "title" => [
                    "label" => "title", 
                    "rules" => "required|min_length[5]|max_length[100]"
                ],
               
                "btn-link" => [
                    "label" => "btn-link", 
                    "rules" => "required|min_length[4]|max_length[200]"
                ],
                // "image" => [
                //     "label" => "Image", 
                //     "rules" => "required"
                // ],
            ]);
 
            $sub_title= $this->request->getPost('sub-title');
            $title = $this->request->getPost('title');
            $btn_link = $this->request->getPost('btn-link');
            $image = $this->request->getFile('file');
            $imageName = $image->getRandomName();

            $validData=[
                'sub-title'=>$sub_title,	
                'title'=>$title, 
                'btn-link'=>$btn_link,
                 //'file'=>$image ,
            ];

            if($validation->run($validData)){ 
                $formdata = [
                    'slider_sub_title'=>$sub_title,	
                    'slider_title'=>$title, 
                    'slider_btn_link'=>$btn_link,
                  
                    'slider_image'=>$imageName
                ];

                $image->move('uploads/slider', $imageName); 
                
                $homeslider->insert($formdata);
                $session =  session();
                $session->setFlashData("success", "Successful Registration");
                // return redirect()->to("/dashboard/add_student");

            }else{
                $data["validation"] = $validation->getErrors();
                echo "data Invalid";
            }
        }
        return View('dashboard/frontend_page/logo_slider/add_slider', $data);
    }


   
    // //Edit Student Information
    // public function edit($id)
    // {
    //     $student= new StudentModel();
    //     $batch= new BatchModel();
    //     $branch= new BranchModel();
    //     $course= new CourseModel();
    //     $data=[
    //         "page_title"=>"Student registration",
    //         "page_heading" =>"Student registration",
    //         "batch" => $batch->findAll(),
    //         "branch" => $branch->findAll(),
    //         "course" => $course->findAll(),
    //         'student'=> $student->where('student_id', $id)->first()
    //     ];
    //     return View('dashboard/page/student/update_student', $data);
    // }

    // //Update Student Information
    // public function update($id)
    // {
    //     $student= new StudentModel();
    //     $batch= new BatchModel();
    //     $branch= new BranchModel();
    //     $course= new CourseModel();
    //     $data=[
    //         "page_title"=>"Student registration",
    //         "page_heading" =>"Student registration",
    //         "batch" => $batch->findAll(),
    //         "branch" => $branch->findAll(),
    //         "course" => $course->findAll(),
    //         'student'=> $student->first(),
    //     ];

    //     if($this->request->getMethod() == 'post'){

    //         $validation =  \Config\Services::validation();

    //         $validation->setRules([
    //             "name" => [
    //                 "label" => "Name", 
    //                 "rules" => "required|min_length[3]|max_length[20]"
    //             ],
    //             "number" => [
    //                 "label" => "Number", 
    //                 "rules" => "required|min_length[11]|max_length[15]"
    //             ],
    //             "email" => [
    //                 "label" => "Email address", 
    //                 "rules" => "required|valid_email"
    //             ],
    //             "father-name" => [
    //                 "label" => "Father Name", 
    //                 "rules" => "required|min_length[3]|max_length[20]"
    //             ],
    //             "father-number" => [
    //                 "label" => "Father Number", 
    //                 "rules" => "required|min_length[11]|max_length[15]"
    //             ],
    //             "mother-name" => [
    //                 "label" => "Mother Name", 
    //                 "rules" => "required|min_length[3]|max_length[20]"
    //             ],
    //             "mother-number" => [
    //                 "label" => "Phone Number", 
    //                 "rules" => "required|min_length[11]|max_length[15]"
    //             ],
    //             "district" => [
    //                 "label" => "District", 
    //                 "rules" => "required"
    //             ],
    //             "address" => [
    //                 "label" => "Address", 
    //                 "rules" => "required"
    //             ],
    //             "college-name" => [
    //                 "label" => "College Name", 
    //                 "rules" => "required"
    //             ],
    //             "hsc-roll" => [
    //                 "label" => "HSC Roll", 
    //                 "rules" => "required"
    //             ],
    //             "hsc-reg" => [
    //                 "label" => "HSC Reg", 
    //                 "rules" => "required"
    //             ],
    //             "hsc-gpa" => [
    //                 "label" => "HSC GPA", 
    //                 "rules" => "required"
    //             ],
    //             "school-name" => [
    //                 "label" => "School Name", 
    //                 "rules" => "required"
    //             ],
    //             "ssc-roll" => [
    //                 "label" => "SSC Roll", 
    //                 "rules" => "required"
    //             ],
    //             "ssc-reg" => [
    //                 "label" => "SSC Reg", 
    //                 "rules" => "required"
    //             ],
    //             "ssc-gpa" => [
    //                 "label" => "SSC GPA", 
    //                 "rules" => "required"
    //             ],
    //             "course" => [
    //                 "label" => "Course", 
    //                 "rules" => "required"
    //             ],
    //             "batch" => [
    //                 "label" => "Batch", 
    //                 "rules" => "required"
    //             ],
    //             "branch" => [
    //                 "label" => "Branch", 
    //                 "rules" => "required"
    //             ],
    //             "course_fee" => [
    //                 "label" => "Course Fee", 
    //                 "rules" => "required"
    //             ],
    //             // "file" => [
    //             //     "label" => "Image", 
    //             //     "rules" => "required"
    //             // ],
    //         ]);
 
    //         $name = $this->request->getPost('name');
    //         $number = $this->request->getPost('number');
    //         $email = $this->request->getPost('email');
    //         $father_name = $this->request->getPost('father-name');
    //         $father_number = $this->request->getPost('father-number');
    //         $mother_name = $this->request->getPost('mother-name');
    //         $mother_number = $this->request->getPost('mother-number');
    //         $district = $this->request->getPost('district');
    //         $address = $this->request->getPost('address');
    //         $college_name = $this->request->getPost('college-name');
    //         $hsc_roll = $this->request->getPost('hsc-roll');
    //         $hsc_reg = $this->request->getPost('hsc-reg');
    //         $hsc_gpa = $this->request->getPost('hsc-gpa');
    //         $school_name = $this->request->getPost('school-name');
    //         $ssc_roll = $this->request->getPost('ssc-roll');
    //         $ssc_reg = $this->request->getPost('ssc-reg');
    //         $ssc_gpa = $this->request->getPost('ssc-gpa');
    //         $course = $this->request->getPost('course');
    //         $batch = $this->request->getPost('batch');
    //         $branch = $this->request->getPost('branch');
    //         $course_fee = $this->request->getPost('course_fee');
    //         $image = $this->request->getFile('file');
    //         $imageName = $image->getRandomName();

    //         $validData=[
    //             'name'=>$name,	
    //             'number'=>$number, 
    //             'email'=>$email, 
    //             'father-name'=>$father_name,
    //             'father-number'=>$father_number, 'mother-name'=>$mother_name, 'mother-number'=>$mother_number, 
    //             'district'=>$district,	'address'=>$address, 'college-name'=>$college_name,	
    //             'hsc-roll'=>$hsc_roll,	'hsc-reg'=>$hsc_reg, 'hsc-gpa'=>$hsc_gpa, 
    //             'school-name'=>$school_name, 'ssc-roll'=>$ssc_roll,	'ssc-reg'=>$ssc_reg, 'ssc-gpa'=>$ssc_gpa, 
    //             'course'=>$course, 'batch'=>$batch,	'branch'=>$branch, 'course_fee'=>$course_fee, 'file'=>$image ,
    //         ];

    //         // if($validation->run($validData)){ 
    //             $formdata = [
    //                 'name'=>$name,	
    //                 'number'=>$number, 
    //                 'email'=>$email, 
    //                 'father_name'=>$father_name,
    //                 'father_number'=>$father_number, 
    //                 'mother_name'=>$mother_name, 
    //                 'mother_number'=>$mother_number, 
    //                 'district'=>$district,	
    //                 'address'=>$address, 
    //                 'college_name'=>$college_name,	
    //                 'hsc_roll'=>$hsc_roll,	
    //                 'hsc_reg'=>$hsc_reg, 
    //                 'hsc_gpa'=>$hsc_gpa, 
    //                 'school_name'=>$school_name, 
    //                 'ssc_roll'=>$ssc_roll,	
    //                 'ssc_reg'=>$ssc_reg, 
    //                 'ssc-gpa'=>$ssc_gpa, 
    //                 'course_id'=>$course, 
    //                 'batch_id'=>$batch,	
    //                 'branch_id'=>$branch, 
    //                 'course_fee'=>$course_fee, 
    //                 'image'=>$imageName
    //             ];

    //             $image->move('uploads/img', $imageName); 
    //             $student->update($id,$formdata);
    //             $session =  session();
    //             $session->setFlashData("success", "Successful Registration");
    //             return redirect()->to("/dashboard/all_student");

    //         // }else{
    //         //     $data["validation"] = $validation->getErrors();
    //         //     // echo "data Invalid";
    //         // }
    //     }
    //     return View('dashboard/page/student/update_student', $data);
    // }

    // //Payment 
    // public function payment($id)
    // {
    //     $student= new StudentModel();
    //     $batch= new BatchModel();
    //     $branch= new BranchModel();
    //     $course= new CourseModel();
    //     $data=[
    //         "page_title"=>"Add Payment",
    //         "page_heading" =>"Add Payment",
    //         'student' => $student->select('student.*, batch_name, course_name,  branch_name')->join('batch',  'batch.batch_id = student.batch_id')->join('course',  'course.course_id = student.course_id')->join('branch',  'branch.branch_id = student.branch_id')->where('student_id', $id)->first()
            
    //     ];
    //     return View('dashboard/page/payment/addpayment', $data);
    // }

}


