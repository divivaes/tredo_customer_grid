<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentEmployee extends Model
{
    protected $fillable = [
        'employee_id', 'department_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
