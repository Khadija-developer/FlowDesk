<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'company_name',
        'contact_person',
        'email',
        'phone',
        'address',
        'status',
        'notes',
    ];
// Relationship: Client belongs to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}