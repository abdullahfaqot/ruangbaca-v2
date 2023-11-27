<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Komunitas extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'telepon'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
