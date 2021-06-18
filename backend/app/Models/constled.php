<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class constled extends Model
{
    protected $table = 'constled';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['timestamps'];
}
