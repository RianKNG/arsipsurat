<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ba extends Model
{
    use HasFactory;
    protected $table='ba';
    protected $fillable=['id','surat_id','kode','jenis','lampiran','pdf'];
    
    public function surat()
    {
        // return $this->hasMany(SuratModel::class);
        return $this->belongsTo(SuratModel::class);
        
    }
  

}
