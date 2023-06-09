<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function book() {
        return $this->hasMany(
            Books::class
        );
    }
}
