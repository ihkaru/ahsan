<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriInventoris extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function orang(){
        return $this->belongsTo(Orang::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
    public function alamat(){
        return $this->belongsTo(Alamat::class);
    }
    public function wadah(){
        return $this->belongsTo(Wadah::class);
    }
    public function inventoris(){
        return $this->belongsTo(Inventoris::class);
    }

}
