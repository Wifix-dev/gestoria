<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denouncement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_type_denouncement',
        'description',
        'initial_evidence',
        'final_evidence',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
