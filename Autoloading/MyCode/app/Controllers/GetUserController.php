<?php

namespace App\Controllers;

use App\User;

class GetUserController
{
	public function showInfo() {
	    echo "User - 1:\n";
        $user = new User('duong', 'duong@gmail.com', 1);
        $user->role = 2;
        $user->address = ['Hoang Dieu', 'Da Nang'];
        $user->getInfo();
        $user->Authen();

        echo "\n\n";

        echo "User - 2:\n";
        $user2 = new User('tuan', 'tuan123@gmail.com', 2);
        $user2->role = 1;
        $user2->address = ['Bach Dang', 'Da Nang'];
        $user2->getInfo();
        $user2->Authen();
	}
}
