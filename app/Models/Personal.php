<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'first_name',
        'second_name',
        'first_last_name',
        'second_last_name',
        'gender_id',
        'email',
        'contact_number'
    ];

    public function getRouteKeyName()
    {
        return 'document';
    }
}
