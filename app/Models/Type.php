<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory; 

     protected $fillable=['name','details','package_start_date','package_end_date','status'];
}
