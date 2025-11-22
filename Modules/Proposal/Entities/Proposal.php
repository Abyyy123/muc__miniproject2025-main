<?php

namespace Modules\Proposal\Entities;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $connection = 'mysql_marketing'; 
    protected $table = 'proposal'; 
    
    protected $fillable = [
        'id', 'number', 'description', 'year', 'status', 'created_at', 'updated_at'
    ];
}