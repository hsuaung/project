<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model

{
    // use HasFactory;
    protected $table = 'staff';

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'email',
        'address',
        'age',
        'phone',
        'role_id',
        'password',
        // 'image',
        // 'uuid',
        // 'status',
    ];

}
