<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimoni extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    public function kategoris()
{
    return $this->belongsToMany(Kategori::class, 'kategori_testimoni');
}
}
