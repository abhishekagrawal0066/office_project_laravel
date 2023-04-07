<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clgragistration extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname','mothername','fathername','address','gender','state','city','dob','pincode','course','email'];
    protected $table = 'adminlogin';

}
