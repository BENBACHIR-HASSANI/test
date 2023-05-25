<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entete_pack extends Model
{
    protected $table = "entete_packs";
	public $timestamps = false;
	protected $fillable = ["trigramme_user","type","qc","version","csr","date","env_source"];
    use HasFactory;
}
