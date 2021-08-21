<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeemodel extends Model
{
    use HasFactory;
    protected $table='employee';
    public $timestamps=false;
    protected $fillable = [
        'name',
        'phn',
        'username',
        'password',
    ];
}
