<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table = 'galery';
    public $primaryKey = 'id';
    protected $fillable = [
        'judul', 'deskripsi', 'foto'
    ];
}
