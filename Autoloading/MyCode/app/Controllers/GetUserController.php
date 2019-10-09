<?php

namespace App\Controllers;

use App\User;

class GetUserController
{
	public function showInfo() {
        $user = new User('duong', 'duong@gmail.com', 1);
        $user->role = 2;
        $user->address = ['Hoang Dieu', 'Da Nang'];
        $user->getInfo();
	}
}
