<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'merek',
        'berat',
        'harga_jual',
        'total_stock',
        'status',
        'gambar',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
    ];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'produk_id');
    }
    
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid =  Str::uuid()->toString();
        });
    }
}
