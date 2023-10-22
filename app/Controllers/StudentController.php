<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\BatchModel;
use App\Models\BranchModel;
use App\Models\CourseModel;

class StudentController extends BaseController
{

    //All Student View
    public function index()
    {
        $student = new StudentModel;
        $data=[
            "page_title"=>"Student registration",
            "page_heading" =>"Student registration",
            // 'students' => $student->orderby('student_id','DESC')->paginate(3, 'group'),
            'students' => $student->select('student.*, batch_name, course_name, branch_name')->join('batch',  'batch.batch_id = student.batch_id')->join('course',  'course.course_id = student.course_id')->join('branch',  'branch.branch_id = student.branch_id')->orderby('student_id','DESC')->paginate(15, 'group'),
            'pager' => $student->pager,
    ];
        return View('dashboard/page/student/all_student', $data);
    }

    //Single Student View
    public function viewstudent($id){
        $student= new StudentModel();
        
        $data=[
            "page_title"=>"Student registration",
            "page_heading" =>"Student registration",
            // 'role' => $user_role->findAll(),
            'student' => $student->select('student.*, batch_name, course_name, branch_name')->join('batch',  'batch.batch_id = student.batch_id')->join('course',  'course.course_id = student.course_id')->join('branch',  'branch.branch_id = student.branch_id')->where('student_id', $id)->first(),
            
         ];
         
        return View('dashboard/page/student/view_student',$data);
    }

    //Add Student
    public function addstudent()
    {
        $student= new StudentModel();
        $batch= new BatchModel();
        $branch= new BranchModel();
        $course= new CourseModel();
        $data=[
            "page_title"=>"Student registration",
            "page_heading" =>"Student registration",
            "batch" => $batch->findAll(),
            "branch" => $branch->findAll(),
            "course" => $course->findAll(),
        ];

        if($this->request->getMethod() == 'post'){

            $validation =  \Config\Services::validation();

            $validation->setRules([
                "name" => [
                    "label" => "Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "number" => [
                    "label" => "Number", 
                    "rules" => "required|min_length[11]|max_length[15]"
                ],
                "email" => [
                    "label" => "Email address", 
                    "rules" => "required|valid_email"
                ],
                "father-name" => [
                    "label" => "Father Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "father-number" => [
                    "label" => "Father Number", 
                    "rules" => "required|min_length[11]|max_length[15]"
                ],
                "mother-name" => [
                    "label" => "Mother Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "mother-number" => [
                    "label" => "Phone Number", 
                    "rules" => "required|min_length[11]|max_length[15]"
                ],
                "district" => [
                    "label" => "District", 
                    "rules" => "required"
                ],
                "address" => [
                    "label" => "Address", 
                    "rules" => "required"
                ],
                "college-name" => [
                    "label" => "College Name", 
                    "rules" => "required"
                ],
                "hsc-roll" => [
                    "label" => "HSC Roll", 
                    "rules" => "required"
                ],
                "hsc-reg" => [
                    "label" => "HSC Reg", 
                    "rules" => "required"
                ],
                "hsc-gpa" => [
                    "label" => "HSC GPA", 
                    "rules" => "required"
                ],
                "school-name" => [
                    "label" => "School Name", 
                    "rules" => "required"
                ],
                "ssc-roll" => [
                    "label" => "SSC Roll", 
                    "rules" => "required"
                ],
                "ssc-reg" => [
                    "label" => "SSC Reg", 
                    "rules" => "required"
                ],
                "ssc-gpa" => [
                    "label" => "SSC GPA", 
                    "rules" => "required"
                ],
                "course" => [
                    "label" => "Course", 
                    "rules" => "required"
                ],
                "batch" => [
                    "label" => "Batch", 
                    "rules" => "required"
                ],
                "branch" => [
                    "label" => "Branch", 
                    "rules" => "required"
                ],
                "course_fee" => [
                    "label" => "Course Fee", 
                    "rules" => "required"
                ],
                // "image" => [
                //     "label" => "Image", 
                //     "rules" => "required"
                // ],
            ]);
 
            $name = $this->request->getPost('name');
            $number = $this->request->getPost('number');
            $email = $this->request->getPost('email');
            $father_name = $this->request->getPost('father-name');
            $father_number = $this->request->getPost('father-number');
            $mother_name = $this->request->getPost('mother-name');
            $mother_number = $this->request->getPost('mother-number');
            $district = $this->request->getPost('district');
            $address = $this->request->getPost('address');
            $college_name = $this->request->getPost('college-name');
            $hsc_roll = $this->request->getPost('hsc-roll');
            $hsc_reg = $this->request->getPost('hsc-reg');
            $hsc_gpa = $this->request->getPost('hsc-gpa');
            $school_name = $this->request->getPost('school-name');
            $ssc_roll = $this->request->getPost('ssc-roll');
            $ssc_reg = $this->request->getPost('ssc-reg');
            $ssc_gpa = $this->request->getPost('ssc-gpa');
            $course = $this->request->getPost('course');
            $batch = $this->request->getPost('batch');
            $branch = $this->request->getPost('branch');
            $course_fee = $this->request->getPost('course_fee');
            $image = $this->request->getFile('file');
            $imageName = $image->getRandomName();

            $validData=[
                'name'=>$name,	
                'number'=>$number, 
                'email'=>$email, 
                'father-name'=>$father_name,
                'father-number'=>$father_number, 
                'mother-name'=>$mother_name, 
                'mother-number'=>$mother_number, 
                'district'=>$district,	
                'address'=>$address, 
                'college-name'=>$college_name,	
                'hsc-roll'=>$hsc_roll,	
                'hsc-reg'=>$hsc_reg, 
                'hsc-gpa'=>$hsc_gpa, 
                'school-name'=>$school_name,
                 'ssc-roll'=>$ssc_roll,
                 	'ssc-reg'=>$ssc_reg, 
                    'ssc-gpa'=>$ssc_gpa, 
                'course'=>$course, 
                'batch'=>$batch,	
                'branch'=>$branch, 
                'course_fee'=>$course_fee,
                 //'file'=>$image ,
            ];

            if($validation->run($validData)){ 
                $formdata = [
                    'name'=>$name,	
                    'number'=>$number,
                     'email'=>$email, 
                    'father_name'=>$father_name,
                    'father_number'=>$father_number, 
                    'mother_name'=>$mother_name, 
                    'mother_number'=>$mother_number, 
                    'district'=>$district,	
                    'address'=>$address, 
                    'college_name'=>$college_name,	
                    'hsc_roll'=>$hsc_roll,	
                    'hsc_reg'=>$hsc_reg, 
                    'hsc_gpa'=>$hsc_gpa, 
                    'school_name'=>$school_name, 
                    'ssc_roll'=>$ssc_roll,	
                    'ssc_reg'=>$ssc_reg, 
                    'ssc-gpa'=>$ssc_gpa, 
                    'course_id'=>$course, 
                    'batch_id'=>$batch,
                    'branch_id'=>$branch, 
                    'course_fee'=>$course_fee, 
                    'image'=>$imageName
                ];

                $image->move('uploads/img', $imageName); 
                // print_r($formdata);
                $student->insert($formdata);
                $session =  session();
                $session->setFlashData("success", "Successful Registration");
                // return redirect()->to("/dashboard/add_student");

            }else{
                $data["validation"] = $validation->getErrors();
                echo "data Invalid";
            }
        }
        return View('dashboard/page/student/add_student', $data);
    }

    //Edit Student Information
    public function edit($id)
    {
        $student= new StudentModel();
        $batch= new BatchModel();
        $branch= new BranchModel();
        $course= new CourseModel();
        $data=[
            "page_title"=>"Student registration",
            "page_heading" =>"Student registration",
            "batch" => $batch->findAll(),
            "branch" => $branch->findAll(),
            "course" => $course->findAll(),
            'student'=> $student->where('student_id', $id)->first()
        ];
        return View('dashboard/page/student/update_student', $data);
    }

    //Update Student Information
    public function update($id)
    {
        $student= new StudentModel();
        $batch= new BatchModel();
        $branch= new BranchModel();
        $course= new CourseModel();
        $data=[
            "page_title"=>"Student registration",
            "page_heading" =>"Student registration",
            "batch" => $batch->findAll(),
            "branch" => $branch->findAll(),
            "course" => $course->findAll(),
            'student'=> $student->first(),
        ];

        if($this->request->getMethod() == 'post'){

            $validation =  \Config\Services::validation();

            $validation->setRules([
                "name" => [
                    "label" => "Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "number" => [
                    "label" => "Number", 
                    "rules" => "required|min_length[11]|max_length[15]"
                ],
                "email" => [
                    "label" => "Email address", 
                    "rules" => "required|valid_email"
                ],
                "father-name" => [
                    "label" => "Father Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "father-number" => [
                    "label" => "Father Number", 
                    "rules" => "required|min_length[11]|max_length[15]"
                ],
                "mother-name" => [
                    "label" => "Mother Name", 
                    "rules" => "required|min_length[3]|max_length[20]"
                ],
                "mother-number" => [
                    "label" => "Phone Number", 
                    "rules" => "required|min_length[11]|max_length[15]"
                ],
                "district" => [
                    "label" => "District", 
                    "rules" => "required"
                ],
                "address" => [
                    "label" => "Address", 
                    "rules" => "required"
                ],
                "college-name" => [
                    "label" => "College Name", 
                    "rules" => "required"
                ],
                "hsc-roll" => [
                    "label" => "HSC Roll", 
                    "rules" => "required"
                ],
                "hsc-reg" => [
                    "label" => "HSC Reg", 
                    "rules" => "required"
                ],
                "hsc-gpa" => [
                    "label" => "HSC GPA", 
                    "rules" => "required"
                ],
                "school-name" => [
                    "label" => "School Name", 
                    "rules" => "required"
                ],
                "ssc-roll" => [
                    "label" => "SSC Roll", 
                    "rules" => "required"
                ],
                "ssc-reg" => [
                    "label" => "SSC Reg", 
                    "rules" => "required"
                ],
                "ssc-gpa" => [
                    "label" => "SSC GPA", 
                    "rules" => "required"
                ],
                "course" => [
                    "label" => "Course", 
                    "rules" => "required"
                ],
                "batch" => [
                    "label" => "Batch", 
                    "rules" => "required"
                ],
                "branch" => [
                    "label" => "Branch", 
                    "rules" => "required"
                ],
                "course_fee" => [
                    "label" => "Course Fee", 
                    "rules" => "required"
                ],
                // "file" => [
                //     "label" => "Image", 
                //     "rules" => "required"
                // ],
            ]);
 
            $name = $this->request->getPost('name');
            $number = $this->request->getPost('number');
            $email = $this->request->getPost('email');
            $father_name = $this->request->getPost('father-name');
            $father_number = $this->request->getPost('father-number');
            $mother_name = $this->request->getPost('mother-name');
            $mother_number = $this->request->getPost('mother-number');
            $district = $this->request->getPost('district');
            $address = $this->request->getPost('address');
            $college_name = $this->request->getPost('college-name');
            $hsc_roll = $this->request->getPost('hsc-roll');
            $hsc_reg = $this->request->getPost('hsc-reg');
            $hsc_gpa = $this->request->getPost('hsc-gpa');
            $school_name = $this->request->getPost('school-name');
            $ssc_roll = $this->request->getPost('ssc-roll');
            $ssc_reg = $this->request->getPost('ssc-reg');
            $ssc_gpa = $this->request->getPost('ssc-gpa');
            $course = $this->request->getPost('course');
            $batch = $this->request->getPost('batch');
            $branch = $this->request->getPost('branch');
            $course_fee = $this->request->getPost('course_fee');
            $image = $this->request->getFile('file');
            $imageName = $image->getRandomName();

            $validData=[
                'name'=>$name,	
                'number'=>$number, 
                'email'=>$email, 
                'father-name'=>$father_name,
                'father-number'=>$father_number, 
                'mother-name'=>$mother_name, 
                'mother-number'=>$mother_number, 
                'district'=>$district,	
                'address'=>$address, 
                'college-name'=>$college_name,	
                'hsc-roll'=>$hsc_roll,	
                'hsc-reg'=>$hsc_reg, 
                'hsc-gpa'=>$hsc_gpa, 
                'school-name'=>$school_name, 
                'ssc-roll'=>$ssc_roll,	
                'ssc-reg'=>$ssc_reg, 
                'ssc-gpa'=>$ssc_gpa, 
                'course'=>$course, 
                'batch'=>$batch,	
                'branch'=>$branch, 
                'course_fee'=>$course_fee, 
            ];

            if($validation->run($validData)){ 
                $formdata = [
                    'name'=>$name,	
                    'number'=>$number, 
                    'email'=>$email, 
                    'father_name'=>$father_name,
                    'father_number'=>$father_number, 
                    'mother_name'=>$mother_name, 
                    'mother_number'=>$mother_number, 
                    'district'=>$district,	
                    'address'=>$address, 
                    'college_name'=>$college_name,	
                    'hsc_roll'=>$hsc_roll,	
                    'hsc_reg'=>$hsc_reg, 
                    'hsc_gpa'=>$hsc_gpa, 
                    'school_name'=>$school_name, 
                    'ssc_roll'=>$ssc_roll,	
                    'ssc_reg'=>$ssc_reg, 
                    'ssc-gpa'=>$ssc_gpa, 
                    'course_id'=>$course, 
                    'batch_id'=>$batch,	
                    'branch_id'=>$branch, 
                    'course_fee'=>$course_fee, 
                    
                ];
                if($image && $image->isvalid() && !$image->hasMoved()){
                    $formdata = ['image'=>$imageName];
                    $image->move('uploads/img', $imageName); 
                    $student->update($id,$formdata);
                    $session =  session();
                    $session->setFlashData("success", "Successful Registration");
                    return redirect()->to("/dashboard/all_student");
                }else{
                    $student->update($id,$formdata);
                    $session =  session();
                    $session->setFlashData("success", "Successful Registration");
                    return redirect()->to("/dashboard/all_student");
                }

            }else{
                $data["validation"] = $validation->getErrors();
                // echo "data Invalid";
            }
        }
        return View('dashboard/page/student/update_student', $data);
    }

    //Payment 
    public function payment($id)
    {
        $student= new StudentModel();
        $batch= new BatchModel();
        $branch= new BranchModel();
        $course= new CourseModel();
        $data=[
            "page_title"=>"Add Payment",
            "page_heading" =>"Add Payment",
            'student' => $student->select('student.*, batch_name, course_name,  branch_name')->join('batch',  'batch.batch_id = student.batch_id')->join('course',  'course.course_id = student.course_id')->join('branch',  'branch.branch_id = student.branch_id')->where('student_id', $id)->first()
            
        ];
        return View('dashboard/page/payment/addpayment', $data);
    }

}
