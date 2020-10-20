<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    /**configuraões model */
    protected $table = 'tbgaleria_fotos';
    public $timestamps = false;
    protected $primaryKey = 'idTBGaleria_Fotos';
    //pra inserção em massa
    protected $guarded = [];
    /** fim configuraões model */
    //atributos
    public $projeto;
    //fim atributos
    public function getGaleria($idProjeto){
        return Galeria::where('TbProjeto_idTbProjeto', $idProjeto)->paginate(10);
    }
}
