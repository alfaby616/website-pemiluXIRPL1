<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Ubah ini
use Laravel\Sanctum\HasApiTokens; // Tambahkan ini

// Kita ubah extends Model menjadi extends Authenticatable agar bisa pakai Sanctum
class Student extends Authenticatable 
{
    use HasApiTokens, HasFactory;

    protected $guarded = ['id'];
}