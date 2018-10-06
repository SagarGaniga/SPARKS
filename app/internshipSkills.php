<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internshipSkills extends Model
{
    protected $table = "internship_skill";
    protected $primaryKey = "id";
    public $timestamps = false;
}
