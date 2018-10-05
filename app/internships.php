<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internships extends Model
{
    protected $table = "internships";
    protected $primaryKey = "id";
    public $timestamps = false;
}
