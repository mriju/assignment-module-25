<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'birth_date', 'address'];

    // Define the relationship between Employee and Leave
    public function leaves()
    {
        return $this->hasMany(Leave::class);
    }
}

