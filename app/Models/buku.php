<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'table_buku';

    protected $primaryKey = 'BukuId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $guarded = [''];

    // public function Kategoribuku(): BelongsTo
    // {
    //     return $this->belongsTo(Kategoribuku::class,'KategoriID', 'NamaKategori');
    // }

    // public function Kategoribuku_relasi(): BelongsTo
    // {
    //     return $this->belongsTo(Kategoribuku_relasi::class,'KategoriRelasiID','KategoriRelasiID');
    // }
}
