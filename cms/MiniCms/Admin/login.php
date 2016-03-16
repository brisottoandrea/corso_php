<?php namespace MiniCms\Admin;


class login {

    protected $secretKey;
    protected $password;

    CONST CHARACTERS = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * login constructor.
     *
     * @param $secretKey
     * @param $password
     */
    public function __construct($secretKey, $password) {
        $this->secretKey = $secretKey;
        $this->password = $password;
    }


    public function userIsLogged() {
        if(!isset($_COOKIE['key']) || !isset($_COOKIE['hash'])) {
            return FALSE;
        }

        if($this->getHash($_COOKIE['key']) != $_COOKIE['hash']) {
            return FALSE;
        }

        return TRUE;
    }

    public function showLogin($showError) {
        include VIEWDIR."login.php";
    }

    public function checkPassword() {
        if(!isset($_POST['password']) || $_POST['password'] != $this->password) {
            return false;
        }

        $key = "";
        for($i = 0; $i < 7; $i++) {
            $key .= self::CHARACTERS[rand(0,strlen(self::CHARACTERS))];
        }
        setcookie("key",$key);
        setcookie("hash",$this->getHash($key));
        return TRUE;
    }

    public function logout() {
        setcookie("key",null);
        setcookie("hash",null);
    }

    protected function getHash($key) {
        return sha1($this->secretKey.md5($key));
    }
}