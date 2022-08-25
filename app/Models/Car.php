<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer_id',
        'transmission_id',
        'color',
        'size'
    ];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function transmission() {
        return $this->belongsTo(Transmission::class);
    }
}
