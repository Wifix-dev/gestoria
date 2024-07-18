<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenouncementWeb extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'last_name',
        'id_type_denouncement',
        'case_name',
        'status',
        'final_comments',
        'description',
        'initial_evidence',
        'final_evidence',
        'created_at',
        'manager_id',
        'contact_id',
        'updated_at'
    ];
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
    public function type()
    {
        return $this->belongsTo(TypeDenouncements::class,'id_type_denouncement');
    }
}
