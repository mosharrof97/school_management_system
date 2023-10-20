<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseModel;

class CourseController extends BaseController
{
    public function index()
    {
        $course = new CourseModel(); 
        $data = [
             'page_title'=> 'Add Course',
             'page_heading'=>'Add Course',
             'course' => $course->orderby('course_id' )->paginate(15, 'group'),
             'pager'=>$course->pager,
        ];
        return View("dashboard/page/course/all_course", $data);
    }

    //Create Course
    public function addcourse()
    {
       $course = new CourseModel();
       $data = [
            'page_title'=> 'Add Course',
            'page_heading'=>'Add Course',
       ];
        if($this->request->getMethod() == "post"){
            $name = $this->request->getPost('name');
            $coursefee = $this->request->getPost('course-fee');
            $coursedesc = $this->request->getPost('course-desc');
            $image = $this->request->getFile('course-img');
            $imageName = $image->getRandomName();
            $formData=[
                    'course_name'=>$name,
                    'c_course_fee'=>$coursefee,
                    'course_desc'=>$coursedesc,
                    'course_image'=>$imageName,
            ];
            $image->move('uploads/img', $imageName);
            $course->insert($formData);
        }
        return View("dashboard/page/course/add_course", $data);
    }

     //Delete Course
     public function delete($id)
     {
        $course = new CourseModel();
        $data['course'] = $course->where('course_id', $id)->delete($id);
        return redirect()->to("/dashboard/all_role");
    }

    //Edit Course
    public function edit($id)
    {
       $course = new CourseModel();
       $data = [
            'page_title'=> 'Add Course',
            'page_heading'=>'Add Course',
        ];
        $data['course'] = $course->where('course_id', $id)->first();
        return view('dashboard/page/course/update_course', $data);
       
   }

   //Update Course
   public function update($id)
   {
      $course = new CourseModel();
    
    if($this->request->getMethod() == "post"){

        $name = $this->request->getPost("name");
        $courseFee= $this->request->getPost("course-fee");
        $coursedesc = $this->request->getPost('course-desc');
        $image = $this->request->getFile('course-img');
        $imageName = $image->getRandomName();
        $formData =[
            "course_name" => $name,
            "c_course_fee" => $courseFee,
            'course_desc'=>$coursedesc,
            'course_image'=>$imageName,
        ];
        $image->move('uploads/img', $imageName);

        $course->update($id,$formData );
        return redirect()->to("/dashboard/all_course");
    }
      
      
  }
}

