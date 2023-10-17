<?php 

class ProfileInfo extends Dbh {

    protected function getProfileInfo($userId) {

        $sql = "SELECT * FROM profiles WHERE users_id = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($userId))) {
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

    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {

        $sql = "UPDATE profiles SET profiles_about = ?, profiles_introtitle = ?, profiles_introtext	 = ? WHERE users_id = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header('location: ../profile.php?error=stmtfailed');
            exit();
        }
    
        $stmt = null;        
    }

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {

        $sql = "INSERT INTO profiles (profiles_about, profiles_introtitle, profiles_introtext, users_id) VALUES (?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header('location: ../profile.php?error=stmtfailed');
            exit();
        }
    
        $stmt = null;        
    }
}