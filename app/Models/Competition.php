<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Competition extends Model
{
    use HasFactory;
    protected $table = 'competition';
    protected $fillable = ['name', 'description', 'date'];
}
