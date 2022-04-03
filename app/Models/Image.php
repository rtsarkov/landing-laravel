<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function catalog()
    {
        return $this->hasOne(Catalog::class);
    }

    public function partner()
    {
        return $this->hasOne(Partner::class);
    }
}
