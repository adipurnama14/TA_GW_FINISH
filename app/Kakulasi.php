<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kakulasi extends Model
{
    use SoftDeletes;

    protected $table = 'kakulasi';

    protected $fillable = [
        'mahasiswa_id', 'ipk', 'kejuaraan', 'akademik', 'non_akademik', 'hasil'
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }
}
