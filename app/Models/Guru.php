<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'nip', 'notelp'];
}
