<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    //
    protected $table="surat";
    protected $primaryKey="id_surat";
    protected $fillable=["id_type_surat","id_perusahaan","nomersurat","isi","tgl_keluar"];

    public function getTypeSurat(){
    	$this->belongsTo('type_surat','id_type_surat','id_type_surat');
    }
    public function getPerusahaan(){
    	$this->belongsTo('perusahaan','id_perusahaan','id_perusahaan');
    }
}
