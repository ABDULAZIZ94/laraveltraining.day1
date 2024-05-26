<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titles extends Model
{
    use HasFactory;

    protected $table = 'titles';
    protected $primaryKey = ['emp_no', 'title', 'from_date'];
    public $incrementing = false;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'emp_no',
        'title',
        'from_date',
        'to_date',
    ];

    protected $dates = [
        'from_date',
        'to_date',
    ];

    /**
     * Hubungan dengan model Employee.
     */
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'emp_no');
    }
}
