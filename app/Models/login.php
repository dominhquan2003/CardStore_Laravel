<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'login';
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'username' ,
        'password',
        'phone'
    ];
}
