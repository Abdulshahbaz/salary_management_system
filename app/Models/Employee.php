<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Salarie;
class Employee extends Model
{
    use HasFactory;
    use softDeletes;

    public function salarie()
    {
        return $this->hasMany(Salarie::class);
    }

    protected $fillable = [
        'name ',
        'email',
        'mobile',
        'address',
        'base_salary',
    ];
}
