<?php

namespace Modules\Employees\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $connection = 'mysql_hrd';
    protected $table = 'employees';

    protected $fillable = ['fullname', 'status'];
}
