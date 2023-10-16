<?php
// controller

class SignupContr extends Signup {

    private $uid;
    private $pwd;
    private $pwdRepeate;
    private $email;

    public function __construct($uid, $pwd, $pwdRepeate, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeate = $pwdRepeate;
        $this->email = $email;
    }

    private function signupUser() {

        if ($this->emptyInput() == false) {
            // echo 'Empty Input!';
            header('location: ../index.php?error=emptyinput');
            exit();
        }

        if ($this->invalidUid() == false) {
            // echo 'Invalid Username!';
            header('location: ../index.php?error=username');
            exit();
        }

        if ($this->invalidEmail() == false) {
            // echo 'Invalid Email!';
            header('location: ../index.php?error=email');
            exit();
        }

        if ($this->pwdMatch() == false) {
            // echo 'Password do not match!';
            header('location: ../index.php?error=passwordmatch');
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            // echo 'Username or Email Taken!';
            header('location: ../index.php?error=useroremailtaken');
            exit();
        }

        $this->setUser();
    }

    private function emptyInput() {
        $result = '';

        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeate) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUid() {
        $result = '';

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result = '';

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function pwdMatch() {
        $result = '';

        if ($this->pwd !== $this->pwdRepeate) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function uidTakenCheck() {
        $result = '';

        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}