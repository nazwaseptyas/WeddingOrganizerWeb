<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konsultasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email_konsultasi', 'alamat', 'tanggal', 'nohp', 'keluhan'];

    protected $primaryKey = 'id_konsultasis';
    public static function createWithSession($data)
    {
        return self::create($data);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id_users');
    }

}