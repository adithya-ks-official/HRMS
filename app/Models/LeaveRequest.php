<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
   // use HasFactory;
    protected $fillable = [
        'employee_name',
        'employee_email',
        'start_date',
        'end_date', 
        'reason',
        'status'
    ];
}
