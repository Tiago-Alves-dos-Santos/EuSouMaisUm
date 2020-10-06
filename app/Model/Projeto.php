<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    /**configuraões model */
    protected $table = 'tbprojeto';
    public $timestamps = false;
    protected $primaryKey = 'idTbProjeto';
    //pra inserção em massa
    protected $guarded = [];
    //const CREATED_AT = 'creation_date';
    //const UPDATED_AT = 'last_update';
    /** fim configuraões model */
}
