<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAllTableDsn extends Model
{
    protected $table = "request_all_table_dsns";
    public $timestamps = false;
    protected $fillable = ["entete_id","tableName","request"];
    use HasFactory;
}
