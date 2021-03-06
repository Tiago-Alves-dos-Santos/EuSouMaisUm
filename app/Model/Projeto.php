<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Galeria;
class Projeto extends Model
{
    /**configuraões model */
    protected $table = 'tbprojeto';
    public $timestamps = false;
    protected $primaryKey = 'idTbProjeto';
    //pra inserção em massa
    protected $guarded = [];
    /** fim configuraões model */
    //atributos
    //fim atributos
    public function getGaleria(Galeria $galeria){
        return $galeria->getGaleria($this->id);
    }
}
