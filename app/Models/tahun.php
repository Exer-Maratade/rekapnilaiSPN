<?php

namespace App\Models;

use App\Models\siswa;
use App\Models\akademik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tahun extends Model
{
    use HasFactory;
    protected $table = 'tahun';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_tahun', 'siswa_id','akademik_id'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }
    public function akademik(){
        return $this->hasMany(akademik::class);
    }
}
