<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ba extends Model
{
    use HasFactory;
    protected $table='ba';
    protected $fillable=['kode','jenis','lampiran','pdf'];
    
    public function surat()
    {
        return $this->hasOne(SuratModel::class);
    }

}
