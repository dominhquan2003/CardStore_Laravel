<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'tensp',
        'giasp',
        'mota',
        'soluong',
        'ID_DMSP',
        'link',
        'status',
        'created_date'

    ];

}
