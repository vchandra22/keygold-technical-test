<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'total_pemesanan',
        'total_harga',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaksi_id');
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid =  Str::uuid()->toString();
        });
    }
}
