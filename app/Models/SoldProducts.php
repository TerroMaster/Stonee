<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProducts extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillabel = ['name','sum','amount','stone_products_id',];
    public function stone_products()
    {
        return $this->belongsTo(StoneProducts::class,'workers_id','id');
=======
    protected $fillabel = ['name','sum','amount','stone_products_id'];
    public function stone_products()
    {
        return $this->belongsTo(StoneProducts::class,'stone_products_id','id');
>>>>>>> cb34fb6 (Last)
    }
}