<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = ['fathers_name', 'mothers_name', 'age', 'blood_group', 'designation', 'address', 'user_id'];
}
