<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'auth'; // Sesuaikan nama tabel dengan yang telah Anda tentukan

    protected $primaryKey = 'username'; // Tentukan primary key yang sesuai

    protected $keyType = 'string'; // Tentukan tipe data primary key

    public $incrementing = false; // Tentukan apakah primary key bertipe auto-increment atau tidak

    protected $fillable = [
        'username', 'password', 'role', // Tambahkan kolom-kolom yang bisa diisi secara massal
    ];

    protected $hidden = [
        'password', // Kolom password akan disembunyikan ketika diambil
    ];

    // Tambahkan metode untuk menentukan apakah pengguna memiliki peran tertentu
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}
