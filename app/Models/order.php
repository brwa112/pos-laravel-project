<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    use HasFactory;
    protected $fillable=['barcode','name','sell_price','quantity','invoice_id'];
    
}
