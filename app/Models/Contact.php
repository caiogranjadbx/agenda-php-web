<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'phone1',
        'phone2',
        'phone3',
        'email',
        'address',
        'birthday',
        'notes',
        'favorite',
    ];
}
