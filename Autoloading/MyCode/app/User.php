<?php

namespace App;

use App\Controllers\AbstractUser;
use mysql_xdevapi\Exception;

class User extends AbstractUser
{
    private $address = [];
    private $role;

    use TraitSupport;

    function __construct($username, $email, $gender, $address = [], $role = null)
    {
        $this->email = $email;
        $this->username = $username;
        $this->gender = $gender;
        $this->address = $address;
        $this->role = $role;
    }

    public function __set($name, $value)
    {
        if($name == "role") {
            if ($value != 1 && $value != 2) {
                echo "Invalid value for role property";
                exit();
            }
        }
        else {
            $this->$name = $value;
        }
    }

    public function getInfo()
    {
        echo "---------- User - Information ----------" . "\n";
        echo "Username: " . $this->username . "\n";
        echo "Email: " . $this->email . "\n";
        $getGender = ($this->gender == 1) ? "Male" : "Female";
        $getRole = ($this->role == 1) ? "Admin" : "User";
        echo "Gender: " . $getGender . "\n";
        echo "Role: " . $getRole . "\n";
        $formatAddress = $this->echoAddress($this->address);
    }
}
