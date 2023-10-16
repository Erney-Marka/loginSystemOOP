<?php 
// model

class Signup extends Dbh {

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
}