<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobsList extends Model
{
    use HasFactory;
    protected $table = "jobLists";
    protected $fillable = ["cmp_name,position,salary,email,about"];
}
