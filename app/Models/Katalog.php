<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_paket',
        'isi_katalog',
        'gambar',
        'biaya',
    ];
    protected $table = 'katalogs'; 
    protected $primaryKey = 'id_katalog';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}