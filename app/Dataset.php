<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dataset extends Model
{
    use SoftDeletes;

    protected $table = 'dataset';

    protected $fillable = [
    'npm', 'ipk', 'kejuaraan', 'akademik', 'non_akademik', 'keputusan'
    ];
}
