<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderformdetail extends Model
{
    protected $table = 'orderformdetail';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id_donhang','id_SP','soluongmua',	'giaban',	'status',	'created_at' ,'link'
    ];
}
