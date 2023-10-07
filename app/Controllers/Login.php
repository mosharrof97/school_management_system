<?php
    
    namespace App\Controllers;
    // use Codeigniter\Controller;
    use App\Models\UserModel;


    class Login extends BaseController {

        public function __construct(){
            helper('form');
        }
    
        public function index(): string  {
            helper(['form']);
            $userModel = new UserModel();
            $data=[
                "page_title"=> "User Login ",
                "page_heading"=> " Login Form"
            ];

            return view("dashboard/auth/login", $data);
        }
    
        public function loginAuth()
        {
            $session = session();
            $userModel = new UserModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            
            $data = $userModel->where('email', $email)->first();
            
            if($data){
                $pass = $data['password'];
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $ses_data = [
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/login');
                
                }else{
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return redirect()->to('/login');
                }
            }else{
                $session->setFlashdata('msg', 'Email does not exist.');
                return redirect()->to('/login');
            }
        }
    }
?>