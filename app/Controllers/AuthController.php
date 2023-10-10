<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Auth;
use App\Libraries\Hash;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $helpers = ['url','form'];

    
    public function index()
    {
        $data =[
            'page_title'=>'Login',
            'page_heading' => 'Login'
        ];
        return view('dashboard/auth/login', $data);
    }
   
    public function loginhandler(){
        
        $fieldType = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        if($fieldType == 'email'){
            $isValid = $this->validate([
                'login_id' =>[
                    'rules' =>'required|valid_email|is_not_unique[user.email]',
                    'errors' =>[
                        'required' => 'Email is required',
                        'valid_email' => 'Please, Check the Email field. It dose not appears to be valid.',
                        'is_not_unique' => 'Email is not exists in our system.',
                    ]
                    ],
                    'password'=>[
                        'rules' =>'required|min_length[6]|max_length[15]',
                        'errors'=>[
                            'required' => 'Password is required',
                            'min_length' => 'Password must have atleast 6 characters in length',
                            'max_length' => 'Password must not have characters more then 15  in length.',

                        ]
                    ]
            ]);
        }else{
            $isValid = $this->validate([
                'login_id' =>[
                    'rules' =>'required|is_not_unique[user.username]',
                    'errors' =>[
                        'required' => 'Username is required',
                        'is_not_unique' => 'Username is not exists in our system.',
                    ]
                ],
                'password'=>[
                    'rules' =>'required|min_length[6]|max_length[15]',
                    'errors'=>[
                        'required' => 'Password is required',
                        'min_length' => 'Password must have atleast 6 characters in length',
                        'max_length' => 'Password must not have characters more then 15  in length.',

                    ]
                ],
            ]);
        }

        $data =[
            'page_title'=>'Login',
            'page_heading' => 'Login'
        ];

        if(!$isValid){
            return view('dashboard/auth/login', $data);
        }
        else{
            $user = new UserModel();
            $userInfo = $user->where($fieldType, $this-> request -> getVar('login_id')) -> first();
            $check_password = Hash::check($this->request->getVar('password'), $userInfo['password']);

            if(!$check_password){
                return redirect()-> route('admin.login.form')-> with('fail', 'wrong Password')->withInput();
            }
            else{
                // $ses_data = [
                    
                //     'isLoggedIn' => true
                // ];
                // $session->set($ses_data);
                Auth::setAuth($userInfo);
                return redirect()->to('dashboard');
            }
        }
    }

    public function logouthandler(){
        Auth::forget();
         return redirect()->route('admin.login.form')->with('fail','You are logged out!');
    }
    
}
