<?php

class UsersController
{
    public function login(): string
    {
        $errors = [];
        if ($_POST) {
            $user = UsersRepository::getUserByEmailAndPassword($_POST['email'], $_POST['password']);
            if ($user) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['first_name'] = $user->first_name;
                $_SESSION['last_name'] = $user->last_name;
                header('Location: ?page=super-secret');
            } else {
                $errors[] = 'Username or password is incorrect';
            }
        }

        return BaseView::generate('Users', 'login', ['errors' => $errors]);
    }
    
    public function register(): string 
    {
        $errors = [];
        if ($_POST) {
            $errors = User::validate($_POST);
            if (!$errors) {
                UsersRepository::createUser($_POST);
                header('Location: ?page=login');
            }
        }

        return BaseView::generate('Users', 'register', ['errors' => $errors]);
    }
    
    public function logOut(): void
    {
        session_destroy();
        header('Location: ?page=login');
    }

    public function index(): string
    {
        header("Access-Control-Allow-Origin: *");

        $users = UsersRepository::getUsers();
        
        $output = [];
        foreach ($users as $user) {
            $output[] = [
                'name' => $user->first_name . ' ' . $user->last_name,
                'email' => $user->email
            ];
        }

        return json_encode($output);
    }
}