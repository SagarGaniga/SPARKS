<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_Domain extends Model
{
    protected $table = "event_domain";
    protected $primaryKey = "id";
    public $timestamps = false;
}
