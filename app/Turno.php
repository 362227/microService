<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turno';

    protected $fillable = ['documento_usuario','cod_tipo_documento','cod_consultorio','documento_medico','cod_tipo_documento_medico', 'cod_horario'];

    public $timestamps = false;

}
