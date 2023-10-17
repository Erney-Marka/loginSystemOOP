<?php 
// model

class Signup extends Dbh {

    protected function setUser($uid, $pwd, $email) {
        $sql = "INSERT INTO users (users_username, users_pwd, users_email) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $sql = "SELECT users_username FROM users WHERE users_username = ? OR users_email = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        } 

        $resultCheck = '';

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;

    }

    protected function getUserId($uid) {

        $sql = "SELECT users_username FROM users WHERE users_id = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($uid))) {
            $stmt = null;
            header('location: ../profile.php?error=stmtfailed');
            exit();
        }
        
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header('location: ../profile.php?error=profilenotfound');
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }
}