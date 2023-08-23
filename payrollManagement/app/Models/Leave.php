<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $fillable = ['employee_id', 'start_date', 'end_date', 'status', 'reason'];

    // Define the relationship between Leave and Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
