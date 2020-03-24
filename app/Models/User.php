<?php

class User
{
    public $email;
    public $first_name;
    public $last_name;

    public static function validate(array $data): array
    {
        $errors = [];
        if (!$data['email']) {
            $errors[] = 'Email is required.';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email must be valid email address.';
        }
        if (UsersRepository::getUserByEmail($data['email'])) {
            $errors[] = 'Email is already registered';
        }
        if (!$data['first-name']) {
            $errors[] = 'First name is required.';
        }
        if (!$data['last-name']) {
            $errors[] = 'Last name is required.';
        }
        if (!$data['password']) {
            $errors[] = 'Password is required.';
        }
        if ($data['password'] != $data['password2']) {
            $errors[] = 'Passwords must match.';
        }
        if (!ctype_alnum($data['password'])) {
            $errors[] = 'Password must contain at least 1 uppercase and lowercase letter.';
        }
        if (strlen(trim($data['password'])) < 8) {
            $errors[] = 'Password must be at least 8 characters long.';
        }

        return $errors;

    }
}