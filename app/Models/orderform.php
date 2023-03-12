<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderform extends Model
{
    protected $table = 'orderform';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'khachhang_id', 'diachi',  'thanhtoan', 'status', 'created_at'
    ];
}
