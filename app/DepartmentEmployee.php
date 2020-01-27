<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentEmployee extends Model
{
    protected $fillable = [
        'employee_id', 'department_id'
    ];
}
