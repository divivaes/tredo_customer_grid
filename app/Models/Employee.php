<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'gender', 'middlename', 'salary'
    ];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_employees', 'employee_id', 'department_id')->withTimestamps();
    }
}
