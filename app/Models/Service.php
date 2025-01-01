<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = '';
    protected $primary_key ='id';
    protected $keyType ='integer';
    protected $incrementing =true;
    protected $guarded = ['id'];

    const UPLOADPATH = 'images/';

    const UPLOADFIELDS = [];
}
