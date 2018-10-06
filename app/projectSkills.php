<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectSkills extends Model
{
    protected $table = "project_skill";
    protected $primaryKey = "id";
    public $timestamps = false;
}
