<?php

namespace App\Domain\User\Data;

final class UserData{
    /** @var int*/
    private $id;

    /** @var string */
    private $username;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $email;

    public function __construct(
        int $id,
        string $username,
        stirng $firstName,
        string $lastName,
        string $email
    ){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getFirstname(){
        return $this->firstName;
    }
    public function getLastname(){
        return $this->lastName;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    public function seFirstname($firstName){
        $this->firstNameName = $firstName;
    }
    public function setLastname($lastName){
        $this->lastName = $lastName;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}