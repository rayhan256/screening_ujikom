<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berobat extends Model
{
    use HasFactory;
    protected $table= 'berobats';
    protected $fillable = ['pasien_id', 'date', 'dokter_id', 'keluhan', 'adm'];

    public function pasien() {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter() {
        return $this->belongsTo(Dokter::class);
    }
}
