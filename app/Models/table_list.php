<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_list extends Model
{
    public $timestamps = false;
    protected $fillable = ["id","type","tableName","tableHistorique","tableVersion","key1","key2","key3","key4","key5","key6","keyx"];
    use HasFactory;
}
