<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $guarded = [];

    public function testimonis()
    {
        return $this->belongsToMany(Testimoni::class, 'kategori_testimoni');
    }

    public function portofolios()
    {
        return $this->belongsToMany(Portofolio::class, 'kategori_portofolio');
    }
}
