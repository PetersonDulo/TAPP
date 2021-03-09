<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'body'];
    //nome da table
    protected $tabela = 'posts';
    //primary key
    public $primaryKey ='id';
    //Timestamps - para a actualizaçáo dos dados
    // por default ja eh true
    public $timestamps = true;
    
}
