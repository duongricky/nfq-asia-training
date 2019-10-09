<?php

namespace App\Entities;

class Model
{
    protected $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
        echo "Filling attributes: " . json_encode($attributes)  . PHP_EOL;
    }

    public function save()
    {
        echo static::class . " have been saved" . PHP_EOL;
    }

    public static function create($attributes = [])
    {
        $instance = new static($attributes);
        $instance->save();
        return $instance;
    }
}