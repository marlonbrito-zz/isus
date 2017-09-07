<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 15/08/2017
 * Time: 19:34
 */
class Post {
    private $id;
    private $user;
    private $email;
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getUser() {
        return $this->user;
    }
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
}
?>