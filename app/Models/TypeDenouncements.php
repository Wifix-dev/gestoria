<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDenouncements extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type_service',
        'color',
    ];

    public function denouncements()
    {
        return $this->hasMany(Denouncement::class);
    }
}
