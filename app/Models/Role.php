<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Role extends Model
{
    public function admin(){
        return $this->hasOne(Admin::class);
    }

}
