<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersiaTour extends Model
{
    use HasFactory;

    protected $table = 'persiatours';
    protected $guarded = [
        'id',
    ];

}
