<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Demo extends BaseModel{
    
    protected $table = 'demo';
    
    protected $primaryKey='id_demo';

    public $timestamps = false;
}
