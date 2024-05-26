<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = 'salaries';
    protected $primaryKey = ['emp_no', 'from_date'];
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'emp_no',
        'salary',
        'from_date',
        'to_date',
    ];

    /**
     * Mendapatkan hubungan dengan model Employee.
     */
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'emp_no');
    }
}

