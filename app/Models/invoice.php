<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable=['casher','total'];
    /**
     * Get all of the order for the invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order()
    {
        return $this->hasMany(order::class);
    }

    public function scopeById($query,$id){
        if($id){
            return $query->where('id','like',$id)->get();
        }else {
            return $query->get();
        }
    }
    public function scopeDate($query,$start,$end){
        if ($start and  $end) {
            $from=date($start);
            $to=date($end);
            return $query->whereBetween('created_at',[$from,$to])->get();
        }else{
            return $query->get();
        }
    }
}
