<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    protected $table = 'customer';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'hoten',
        'sdt',
        'gioitinh',
        'ngaysinh',
        'email',
        'diachi',
        'status',
        'mota' ,
        'created_at'
    ];
}
