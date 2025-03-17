<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //Khai báo tên bảng
    protected $table = 'products';
    protected $fillable = [
        'name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit'
    ];
    //Khai báo mối quan hệ giữa các bảng
    public function typeProduct()
    {
        return $this->belongsTo(TypeProduct::class, 'id_type');
    }

    public function billDetails()
    {
        return $this->hasMany(BillDetail::class, 'id_product');
    }
}
