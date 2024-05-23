<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Employees extends Model
{

    protected $table = 'employees';

    protected $primaryKey = 'emp_no';

    protected $fillable = [
        'emp_no',
        'first_name',
        'last_name',
        'gender',
    ];

    protected $dates = ['birth_date', 'hire_date']; // Tambah tarikh untuk Soft Deletes

    public $timestamps = false;

    protected $casts = [
        'emp_no' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'birth_date' => 'datetime:Y-m-d',
        'hire_date' => 'datetime:Y-m-d'
    ];

}
