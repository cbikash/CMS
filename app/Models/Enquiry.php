<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $fillable= [
        'name',
        'phone',
        'message',
        'email',
        'product_id',
        'quantity',
        'address',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function product()
    {
        return $this->hasOne(Product::class);
    }

}
