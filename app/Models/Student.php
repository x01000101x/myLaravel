<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    //choose 1. fillable = whitelists, guarded = blacklists.
    protected $fillable = ['name', 'nis', 'email', 'major'];
    // protected $guarded = ['id', 'created_at', 'updated_at'];
}
