<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    public function profissionais () {
        return $this->hasMany(Profissional::class);
    }
}
