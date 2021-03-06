<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/mvcloginregister/app/controllers/Api/loginAPI.php';

class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //login API
            $result = APIFunc::AuthPathAPI();


            $final = json_decode($result);

            if(isset($final->result->sessionid))
            {
                if ($request['csrf'] == $_COOKIE['CSRFtoken'])
                {
                    $this->view('about', $data);
                } 
            }   
            else
            {
                $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                $this->view('users/login', $data);

            }


            
            //Check if all errors are empty
            // if (empty($data['usernameError']) && empty($data['passwordError'])) {
            //     $loggedInUser = $this->userModel->login($data['username'], $data['password']);

            //     if ($loggedInUser) {
            //         $this->createUserSession($loggedInUser);
            //     } else {
            //         $data['passwordError'] = 'Password or username is incorrect. Please try again.';

            //         $this->view('users/login', $data);
            //     }
            // }

        } 

        $this->view('users/login', $data);
        

    }


    // public function createUserSession($user) {
    //     $_SESSION['user_id'] = $user->id;
    //     $_SESSION['username'] = $user->username;
    //     $_SESSION['email'] = $user->email;
    //     header('location:' . URLROOT . '/pages/index');
    // }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }
}
