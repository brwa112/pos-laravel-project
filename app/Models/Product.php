<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['barcode','name','buy_price','selling_price','quantity','create_date','expire_date','category_id','suppliers_id'];
    // public function scopeDate($query,$start,$end){
    //     $from=date($start);
    //     $to=date($end);
    //     return $query->whereBetween('create_date',[$from,$to])->get();
    // }

    public function scopeBarcode($query,$search){
        if ($search) {
            return $query->where('barcode','LIKE',$search)->get();
        }else{
            return $query->get();
        }
    }
    public function scopeOfsupplier($query,$suppliers_id){
        if ($suppliers_id) {
            return $query->where('suppliers_id','LIKE',$suppliers_id)->get();
        }else{
            return $query->get();
        }
    }
    public function category()
    {
        return $this->hasOne(category::class,'id','category_id');
    }
    public function supplier()
    {
        return $this->hasOne(supplier::class,'id','suppliers_id');
    }

}
