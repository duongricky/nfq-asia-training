<?php


namespace App\Controllers;


abstract class AbstractUser
{
    const MALE = 1;
    const FEMALE = 0;
    protected $username;
    protected $email;
    protected $gender;
    protected abstract function getInfo();
}