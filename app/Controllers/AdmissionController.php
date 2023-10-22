<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdmissionModel;
class AdmissionController extends BaseController
{
    public function index()
    {
        $admission = new AdmissionModel();
        $data=[
            "page_title"=> "View All Admission Name & Link",
            "page_heading"=> " View All Admission Name & Link",
            'admission' => $admission->orderby('admission_id')->paginate(3, 'group'),
            'pager' => $admission->pager,
        ];
        
        return View("dashboard/page/admission/all_admission", $data);
    }

    //Delete  role
    public function delete($id)
    {
        $admission = new AdmissionModel();
       $admission ->where('admission_id', $id)->delete($id);
       return redirect()->to("/dashboard/all_admission");

    }

    //Create role
    public function addadmission()
    {
        $admission = new AdmissionModel();
        $data=[
            "page_title"=> "Add Admission Name & Link",
            "page_heading"=> " Add Admission Name & Link"
            ];
        
        if($this->request->getMethod() == "post"){
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => [
                    'label' => 'Admission Name', 
                    'rules' => "required|min_length[3]|max_length[100]",
                ],
                'link' => [
                    'label' => 'Admission Link', 
                    'rules' => "required",
                ],
                ]);

            $name = $this->request->getPost("name");
            $link = $this->request->getPost("link");
            $myData=[
                "name"=> $name,
                "link"=>$link,
            ];
            if ($validation->run($myData)) {
                $formData=[
                    "admission_name"=> $name,
                    "admission_link"=> $link,
                ];
                $admission->insert($formData);
                return redirect()->to("/dashboard/add_admission");

            }else{
                $data["validation"] = $validation->getErrors();
            }
        }
        return View("dashboard/page/admission/add_admission", $data);
    }

    // FrontEnd All Admission Link
    public function admissionPage()
    {
        $admission = new AdmissionModel();
        $data=[
            "page_title"=> "View All Admission Name & Link",
            "page_heading"=> " View All Admission Name & Link",
            'admissions' => $admission->orderby('admission_id')->paginate(3, 'group'),
            'pager' => $admission->pager,
        ];
        
        return View("frontend\page\admission.php", $data);
    }

    //Admission Apply
    public function admissionApply($id)
    {        
        $admission = new AdmissionModel();
        $data = [
            'admission'=> $admission->where('admission_id', $id)->first(),
        ];
        return view('frontend\page\admissionApply.php', $data);
    }
}