<?php

namespace App\Models;

use App\Models\siswa;
use App\Models\akademik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pleton extends Model
{
    use HasFactory;
    protected $table = 'pleton';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_pleton', 'siswa_id','akademik_id'
    ];

    public function siswa(){
        return $this->hasMany(siswa::class);
    }
    public function akademik(){
        return $this->hasMany(akademik::class);
    }
}
