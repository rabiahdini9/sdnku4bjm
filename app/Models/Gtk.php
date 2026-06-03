<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gtk extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'status_kepegawaian',
        'foto'
    ];
}
