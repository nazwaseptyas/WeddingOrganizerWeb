<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;
    // Nama tabel yang akan digunakan oleh model Artikel
    protected $table = 'artikel'; 
    protected $fillable = ['user_id','judul', 'penulis', 'tgl_artikel', 'isi', 'gambar'];

    protected $primaryKey = 'id_artikel'; 
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id_users');
    }
}