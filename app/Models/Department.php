<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'dept_no';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'dept_no',
        'dept_name',
    ];

    public function employees()
    {
        return $this->belongsToMany(Dep_Emp::class, 'dept_emp', 'emp_no', 'dept_no');
    }
}

