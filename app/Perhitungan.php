<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perhitungan extends Model
{
    use SoftDeletes;

    protected $table = 'perhitungan';

    protected $fillable = [
        'dataset_id', 'kakulasi_id', 'jarak'
    ];

    public function dataset(){
        return $this->belongsTo(Dataset::class, 'dataset_id', 'id');
    }

    public function kakulasi(){
        return $this->belongsTo(Kakulasi::class, 'kakulasi_id', 'id');
    }
}
