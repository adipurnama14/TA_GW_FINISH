<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perpanjangan extends Model
{
    use SoftDeletes;

    protected $table = 'perpanjangan';

    protected $fillable = [
        'tahun_id', 'semester_id', 'mahasiswa_id', 'ipk', 'kejuaraan', 'akademik', 'non_akademik'
    ];

    public function tahun(){
        return $this->belongsTo(Tahun::class, 'tahun_id', 'id');
    }


    public function semester(){
        return $this->belongsTo(Semester::class, 'semester_id', 'id');
    }


    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }
}
