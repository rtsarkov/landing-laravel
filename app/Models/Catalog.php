<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $table = 'catalog';

    protected $fillable = [
        'name',
        'manufacturer',
        'warranty',
        'products',
        'description',
        'benefits',
        'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

}
