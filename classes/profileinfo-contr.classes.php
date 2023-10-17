<?php 

class ProfileInfoContr extends ProfileInfo {
    
    private $userId;
    private $userUid;
    
    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileAbout = 'Tell people lorem ipsum.';
        $profiletitle = 'Hi! I am ' . $this->userUid;
        $profileText = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloremque cum aliquid eos, qui et corporis quos sed, quia eum.';

        $this->setProfileInfo($profileAbout, $profiletitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        // error hundlers
        if ($this->emptyInputCheck($about, $introTitle, $introText) == true) {
            header('location: ../profilesettings.php?error=emptyinput');
            exit();
        }

        // update profile info
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
    }

    private function emptyInputCheck($about, $introTitle, $introText) {
        $result = '';

        if (empty($about) || empty($introTitle) || empty($introText)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}