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
        'contact_schedule',
        'suburbs_id'
    ];

    public function denouncement()
    {
        return $this->hasMany(Denouncement::class);
    }

    public function suburb()
    {
        return $this->belongsTo(Suburb::class, 'suburbs_id');
    }


}
