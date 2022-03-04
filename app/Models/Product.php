<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'merchant_id',
        'price',
        'status',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_items');
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class,'id');
    }
}
