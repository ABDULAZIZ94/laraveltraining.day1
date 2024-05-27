<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments'; // Nama table
    protected $primaryKey = 'dept_no'; // Kunci utama
    public $incrementing = false; // Tidak auto-increment kerana kunci utama adalah char
    public $timestamps = false; // Tiada timestamps
    protected $keyType = 'string'; // Jenis kunci utama adalah string

    protected $fillable = [
        'dept_no', // Nombor jabatan
        'dept_name', // Nama jabatan
    ];

    // Hubungan dengan model lain (jika ada)
    public function dep_emp()
    {
        return $this->belongsToMany(Dep_Emp::class, 'dept_emp', 'emp_no', 'dept_no');
    }
}


