<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Patient extends Model
{
    use HasFactory;

    // Los campos que se quieren declarar
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

    // Los campos que están protegidos
    /* protected $guarded = ['status']; */
}
