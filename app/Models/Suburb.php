<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'postal_code',
        'name',
        'type_suburb',
    ];
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }


}
