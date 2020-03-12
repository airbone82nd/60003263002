<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    protected $table = 'majors';
    protected $fillable= ['id','major_id','major_name','fac_id'];
}
