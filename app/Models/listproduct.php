<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listproduct extends Model
{
        protected $table = 'listproduct';
        protected $primaryKey = 'id';
        public $timestamps = false;
        protected $fillable = [
            'tendm',
        	'status',
            'created_date'
        ];


}
