<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratModel extends Model
{
    use HasFactory;
    protected $table='surat';
    // protected $fillable=['id','no_surat','status_surat','ba_id','pengirim','tanggal','keterangan','foto'];
    protected $fillable=['id','no_surat','status_surat','pengirim','label','jumlah','tanggal','keterangan','foto','pdf'];
    protected $primariKey=null;
    public $incrementing =false;
    public function ba()
    {
        // return $this->belongsTo(Ba::class);
        return $this->hasMany(Ba::class);
    }
    public function test()
    {
       $total= SuratModel::where('pengirim','T')
       ->count();
      
       return $total;
      
        
      }
   

}


