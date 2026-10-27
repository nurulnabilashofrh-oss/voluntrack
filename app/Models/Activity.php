<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;

    /**
     * Nama tabel database yang digunakan.
     */
    protected $table = 'activities';

    /**
     * Kolom yang boleh diisi melalui Activity::create().
     */
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'capacity',
        'user_id',
    ];

    /**
     * Konversi tipe data atribut.
     */
    protected function casts(): array
    {
        return [
            'date' => 'date',
            'capacity' => 'integer',
        ];
    }

    /**
     * Relasi: kegiatan dimiliki oleh satu pengguna.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}