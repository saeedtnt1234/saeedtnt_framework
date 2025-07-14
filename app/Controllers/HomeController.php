<?php

namespace App\Controllers;

use Core\Controller;
use Core\Security;
use App\Models\User;
use Core\Auth;
use Core\Helpers;
class HomeController extends Controller
{
    public function index()
    {
        $this->view('home');
    }
    public function register(){
        $this->view('register');
    }
    public function login(){
        $name = Security::xss( $_POST['name']);
        $email = Security::xss($_POST['email']);
        $password = Security::xss($_POST['password']);
        $csrf = Security::xss($_POST['csrf_token']);
        $password1 = password_hash($password,PASSWORD_DEFAULT);
        if(Security::verifyCsrfToken($csrf)){
            User::create([
                'name'=>$name,
                'email'=>$email,
                'password'=>$password1
            ]);
            echo "ایجاد شد";
            $this->view('login');
        }else{
            $this->view('register');
        }
    }
    public function login2(){
        $email = Security::xss($_POST['email']);
        $password = Security::xss($_POST['password']);
        $csrf = Security::xss($_POST['csrf_token']);
        if(Security::verifyCsrfToken($csrf) && Auth::attempt(['email' => $email, 'password' => $password])){
            $this->view('dashbord');
        }else{
            $this->view('login');
            return Helpers::base_url('/login');
        }

    }
}
