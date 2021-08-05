<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poli;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $fillable = ['name', 'poli_id'];

    public function poli() {
        return $this->belongsTo(Poli::class);
    }

    public function berobat() {
        return $this->hasMany(Berobat::class);
    }
}
