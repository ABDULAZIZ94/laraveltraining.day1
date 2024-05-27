<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dep_Manager extends Model
{
    use HasFactory;

    protected $table = 'dept_manager';

    protected $fillable = [
        'emp_no', 
        'dept_no', 
        'from_date', 
        'to_date'
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'emp_no', 'emp_no');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_no', 'dept_no');
    }
}
