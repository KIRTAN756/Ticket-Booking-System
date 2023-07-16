<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked_info extends Model
{
    use HasFactory;
    protected $table = "booked_infos";
    protected $primaryKey = "Booked_id";
}
