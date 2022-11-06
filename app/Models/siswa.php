<?php

namespace App\Models;

use App\Models\kompi;
use App\Models\tahun;
use App\Models\pleton;
use App\Models\akademik;
use App\Models\angkatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $guarded = ['id'];

    protected $fillable = [
        'Name', 'Nosis', 'pleton_id', 'kompi_id','angkatan_id', 'tahun_id'
    ];
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
    public function akademik(){
        return $this->hasMany(akademik::class);
    }

}
