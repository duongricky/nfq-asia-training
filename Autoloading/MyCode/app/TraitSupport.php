<?php


namespace App;


trait TraitSupport
{
    public function echoAddress($address = []) {
        if (sizeof($address) != 0) {
            echo "-------Address------\n";
            echo 'Street: ' . $address[0] . "\n";
            echo 'City: ' . $address[1] . "\n";
        }
    }
}