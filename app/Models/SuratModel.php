<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratModel extends Model
{
    use HasFactory;
    protected $table='surat';
    protected $fillable=['no_surat','status_surat','pengirim','tanggal','keterangan'];
}
