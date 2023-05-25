<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
        public $timestamps = false;
    protected $fillable = ["name","prefix"];
    use HasFactory;
}
