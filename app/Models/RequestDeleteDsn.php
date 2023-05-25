<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDeleteDsn extends Model
{
    protected $table = "request_delete_dsns";
    public $timestamps = false;
    use HasFactory;
}
