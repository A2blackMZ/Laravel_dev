<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name',
        'lastname',
        'username',
        'email',
        'tel',
        'poste',
        'adresse',
        'ville',
        'password'
    ];
}
