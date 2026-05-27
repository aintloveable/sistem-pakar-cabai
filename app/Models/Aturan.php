<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    protected $table = 'aturan';

    protected $fillable = [
        'penyakit_id',
        'gejala_ids',
        'minimal_gejala'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}