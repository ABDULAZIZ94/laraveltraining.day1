<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dep_Emp extends Model
{
    use HasFactory;

    protected $table = 'dept_emp';
    protected $primaryKey = ['emp_no', 'dept_no']; // Composite primary key
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['emp_no', 'dept_no', 'from_date', 'to_date'];
    protected $dates = ['from_date', 'to_date'];
    public function employees()
    {
        return $this->belongsTo(Employees::class, 'emp_no');
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'dept_no');
    }
}
