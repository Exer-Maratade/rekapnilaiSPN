<?php

namespace App\Models;

use App\Models\siswa;
use App\Models\akademik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class angkatan extends Model
{
    use HasFactory;

    protected $table = 'angkatan';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_angkatan', 'siswa_id'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }
    public function akademik(){
        return $this->hasMany(akademik::class);
    }
}
