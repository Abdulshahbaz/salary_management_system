<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
class Salarie extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected $fillable = [
        'employee_id ',
        'month',
        'year',
        'total_working_days',
        'total_leave_taken',
        'overtime',
        'total_salary_made',
        'is_salary_calculated',

    ];
}
