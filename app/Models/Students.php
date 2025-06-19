<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    // Optional: specify fillable fields
    protected $fillable = ['name', 'age', 'gender'];
}
