<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entete_statut extends Model
{
    public $timestamps = false;
	protected $fillable = ["name"];
    use HasFactory;
}
