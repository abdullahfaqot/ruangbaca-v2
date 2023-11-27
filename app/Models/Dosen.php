<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['nip', 'nama', 'jk', 'telepon', 'npsn'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'npsn', 'npsn');
    }
}
