<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denouncement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_type_denouncement',
        'case_name',
        'status',
        'final_comments',
        'description',
        'initial_evidence',
        'final_evidence',
        'created_at',
        'user_id',
        'contact_id',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function manager()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function contact()
{
    return $this->belongsTo(Contact::class);
}
public function TypeDenouncement()
{
    return $this->belongsTo(Contact::class);
}
}
