<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifs extends Model
{
    use HasFactory;

    protected $table = "Tarifs";
    protected $primaryKey = "idTarif";
    public $timestamp = "false";
    protected $fillable = ['nomTarif', 'prixTarif'];

    public function Adherent(){
        return $this->hasMany('App\Models\Adherent_',  'idTarif');
    }

}
