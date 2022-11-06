<?php

namespace App\Models;

use App\Models\kompi;
use App\Models\siswa;
use App\Models\tahun;
use App\Models\pleton;
use App\Models\angkatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class akademik extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'akademik';

    protected $guarded = ['id'];

    protected $fillable = [

        'id_akademik', 'siswa_id', 'tahun_id', 'angkatan_id', 'pleton_id', 'kompi_id'
    ];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    public function pleton(){
        return $this->belongsTo(pleton::class);
    }
    public function kompi(){
        return $this->belongsTo(kompi::class);
    }
    public function tahun(){
        return $this->belongsTo(tahun::class);
    }
    public function angkatan(){
        return $this->belongsTo(angkatan::class);
    }
}
