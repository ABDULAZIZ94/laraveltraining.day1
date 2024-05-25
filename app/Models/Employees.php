<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Employees extends Model
{
    use SoftDeletes,
        HasFactory,
        Notifiable;

    protected $table = 'employees';

    protected $primaryKey = 'emp_no';

    protected $fillable = [
        'emp_no',
        'first_name',
        'last_name',
        'gender',
        'birth_date',
        'hire_date'
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

    /**
     * Mendapatkan jabatan-jabatan yang dikaitkan dengan pekerja.
     */
    public function departments()
    {
        return $this->belongsToMany(Dep_Emp::class, 'dept_emp', 'emp_no', 'dept_no');
    }
}
