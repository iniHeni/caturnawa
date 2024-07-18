<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class loginadmin extends Authenticatable
{
    // use HasFactory;

    protected $table = 'loginadmins'; // Nama tabel
    protected $fillable = ['user', 'pass']; // Sesuaikan dengan kolom yang ada di tabel Anda

    public $timestamps = false; // Nonaktifkan timestamps otomatis

    // Jika Anda menggunakan kolom berbeda untuk autentikasi
    public function getAuthIdentifierName()
    {
        return 'user';
    }

    // Override the default password check to compare plain text (not recommended)
    public function getAuthPassword()
    {
        return $this->pass;
    }
}

