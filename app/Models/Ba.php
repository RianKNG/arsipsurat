<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ba extends Model
{
    use HasFactory;
    protected $table='ba';
    protected $fillable=['id','surat_id','jenis','lampiran'];
    protected $primariKey=null;
    public $incrementing =false;
    
    public function surat()
    {
        // return $this->hasMany(SuratModel::class);
        return $this->belongsTo(SuratModel::class);
        
    }
    public function JumlahSatuan()
    {
      
   
      return 'berkas';
        
      }

}
