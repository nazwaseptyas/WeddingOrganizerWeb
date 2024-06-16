<?php

namespace App\Models;

use App\Models\Katalog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email_pesan',
        'tgl_acara',
        'katalog_id',
        'user_id',
        'status',
    ];
    public function katalog(): BelongsTo
    {
        return $this->belongsTo(Katalog::class, 'katalog_id', 'id_katalog');
    }
    protected $primaryKey = 'id_pesan';
}