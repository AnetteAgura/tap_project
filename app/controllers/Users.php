<?php


class Users extends Controller
{

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->usersModel = $this->model('User');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''

            );
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter valid email';
            } else if ($this->usersModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'Email is already in use';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } else if (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must consist at least 6 characters.';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            } else if (strlen($data['password']) < 6) {
                $data['confirm_password_err'] = 'Password must consist at least 6 characters.';
            } else if ($data['password'] !== $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }
            $this->view('users/register', $data);
        } else {
            $data = array(
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''

            );
        }
        $this->view('users/register', $data);
    }

    public function login()
    {
        $this->view('users/login');
    }
}