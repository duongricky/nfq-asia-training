<?php

namespace App;

use App\Controllers\AbstractUser;
use mysql_xdevapi\Exception;
use App\Authentication;

class User extends AbstractUser implements Authentication
{
    private $address = [];
    private $role;

    use TraitSupport;

    function __construct($username, $email, $gender)
    {
        $this->email = $email;
        $this->username = $username;
        $this->gender = $gender;
    }

    public function __set($name, $value)
    {
        if($name == "role") {
            if ($value != 1 && $value != 2) {
                echo "Invalid value for role property";
                exit();
            }
            else {
                $this->$name = $value;
            }
        }
    }

    public function getInfo()
    {
        echo "User - Information" . "\n";
        echo "---------*---------" . "\n";
        echo "Username: " . $this->username . "\n";
        echo "Email: " . $this->email . "\n";
        $getGender = ($this->gender == 1) ? "Male" : "Female";
        echo "Gender: " . $getGender . "\n";
        $formatAddress = $this->echoAddress($this->address);
    }

    public function Authen()
    {
        echo "Check user's role => ";
        switch ($this->role) {
            case null;
                echo "User has not set role";
                break;
            case 1:
                echo "User has not permission";
                break;
            case 2:
                echo "User has logged in";
                break;
        }
    }
}
