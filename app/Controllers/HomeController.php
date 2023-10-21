<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HomeSliderModel;
use App\Models\StudentModel;
use App\Models\CourseModel;
use App\Models\BranchModel;
use App\Models\BatchModel;
use App\Models\NoticeModel;

class HomeController extends BaseController
{
    public function index()
    {        
        $homeslider= new HomeSliderModel();
        $course= new CourseModel();
        $student = new StudentModel();
        $branch = new BranchModel();

        $data = [
            'homesliders'=> $homeslider->findAll(),
            'courses'=> $course->findAll(),
            'count' => $student->selectCount('student_id', 'count')->get()->getRow()->count,
            'course_count' =>$course->selectCount('course_id', 'course_count')->get()->getRow()->course_count,
            'branch_count'=>$branch->selectCount('branch_id', 'count')->get()->getRow()->count,
        ];
        return view('frontend\page\home.php', $data);
    }


    //Apply Student
    public function applystudent()
    {
        $student= new StudentModel();
        $course= new CourseModel();
        $batch= new BatchModel();
        $branch= new BranchModel();
        $data=[
            "page_title"=>"Student registration",
            "page_heading" =>"Student registration",
            "course" => $course->findAll(),
            "batch" => $batch->findAll(),
            "branch" => $branch->findAll(),
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
                    'image'=>$imageName
                ];

                $image->move('uploads/img', $imageName); 
                // print_r($formdata);
                $student->insert($formdata);
                $session =  session();
                $session->setFlashData("success", "Successful Registration");
                return redirect()->to("/");

            }else{
                $data["validation"] = $validation->getErrors();
                echo "data Invalid";
            }
        }
        return View('frontend\page\apply_student', $data);
    }


    //Course Page
    public function coursePage()
    {        
        $course= new CourseModel();
        $data = [
            "page_title"=>"course",
            "page_heading" =>"course",
            'courses'=> $course->findAll(),
        ];
        return view('frontend\page\course', $data);
    }
   

    //Notice Page
    public function noticePage()
    {        
        $notice= new NoticeModel();
        $data = [
            "page_title"=>"notice",
            "page_heading" =>"notice",
            'notices'=> $notice->orderby('notice_id','DESC')->paginate(10, 'group'),
            'pager' => $notice->pager,
        ];
        return view('frontend\page\notice', $data);
    }


    //Single Notice Page
    public function singleNotice($id)
    {        
        $notice= new NoticeModel();
        $data = [
            "page_title"=>"notice",
            "page_heading" =>"notice",
            'notice'=> $notice->where('notice_id', $id)->first(),
            'notices'=> $notice->orderby('notice_id','DESC')->paginate(10),
        ];
        return view('frontend\page\single-notice', $data);
    }
   
}
