<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model

{
    // use HasFactory;
    protected $table = 'staff';
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}

