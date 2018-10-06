<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class event_registration extends Model
{
    protected $table = "event_registration";
    protected $primaryKey = "id";
    public $timestamps = false;
}
