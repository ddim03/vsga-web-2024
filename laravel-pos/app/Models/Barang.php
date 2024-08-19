<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';
    protected $guarded = ['barang_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_id');
    }
}
