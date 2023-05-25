<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Env_source extends Model
{
    public $timestamps = false;
    protected $fillable = ["name"];
    use HasFactory;
}
