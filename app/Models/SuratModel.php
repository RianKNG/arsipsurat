<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratModel extends Model
{
    use HasFactory;
    protected $table='surat';
    protected $fillable=['id','no_surat','status_surat','ba_id','pengirim','tanggal','keterangan','foto'];
   
    public function ba()
    {
        return $this->belongsTo(Ba::class);
    }

}
