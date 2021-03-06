<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oefeningen extends Model
{
    use HasFactory;
    protected $table = 'oefeningens';
    protected $fillable = ["naamoefening", "beschrijving"];
    public $timestamps = false;
}
