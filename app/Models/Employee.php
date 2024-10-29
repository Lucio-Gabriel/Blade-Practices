<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Employee extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'gender',
        'position',
        'telephone',
        'cpf',
        // 'idade',
        // 'data_contratacao',
        // 'salario',
    ];
}
