<?php

class Index_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function process()
    {
        $userData = array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        );

        $sth = $this->db->prepare("SELECT `id`,`username` FROM `users` WHERE `username` = :username AND `password` = MD5(:password)");
        $sth->execute($userData);

        $count = $sth->rowCount();

        if ($count > 0) {

            $user = $sth->fetch(PDO::FETCH_OBJ);
            $userID = $user->id;
            $userName = $user->username;


            Session::init();
            Session::set('loggedIn', true);
            Session::set('userid', $userID);
            exit('success');
        } else {

            exit('fail');
        }
    }
}
