<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $table = "event";
    protected $primaryKey = "id";
    public $timestamps = false;
}
