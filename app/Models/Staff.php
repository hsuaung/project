<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model

{
    // use HasFactory;
    protected $table = 'staff';

    // protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'address',
    //     'age',
    //     'phone',
    //     'role_id',
    //     'password',
    //     // 'image',
    //     // 'uuid',
    //     // 'status',
    // ];

    // public function role(): BelongsTo
    // {
    //     return $this->belongsTo(role::class);
    // }
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}

