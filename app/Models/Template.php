<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'mg.tb_template';

    protected $fillable = [
        'nm_template', 'path_template',
    ];

    protected $primaryKey = 'id_template';

    public $incrementing = true;
    
    public $timestamps = true;
}