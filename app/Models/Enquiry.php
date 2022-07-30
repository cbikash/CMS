<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Enquiry extends Model
{
    use HasFactory, Notifiable;
    protected $fillable= [
        'name',
        'phone',
        'levels',
        'apply',
        'seen'
    ];

    /**
     * Get the phone associated with the user.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

}
