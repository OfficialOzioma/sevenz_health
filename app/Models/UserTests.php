<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTests extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lab_tests_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function labTests()
    {
        return $this->hasMany(LabTests::class, 'id', 'lab_tests_id');
    }
}
