<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'address',
        'phone',
        'contact_schedule'
    ];

    public function denouncement()
    {
        return $this->has(Denouncement::class);
    }
}