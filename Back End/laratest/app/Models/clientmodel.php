<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientmodel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table ='client_table';

}
