<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['user_id', 'emp_name', 'departement', 'device', 'problem', 'solution', 'image', 'status'];
}
