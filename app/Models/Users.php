<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{

    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'email',
        'type'
    ];
}
