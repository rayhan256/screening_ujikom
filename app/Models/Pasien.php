<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';
    protected $fillable = ['name', 'date', 'gender', 'address'];

    public function berobat() {
        return $this->hasOne(Berobat::class);
    }
}
