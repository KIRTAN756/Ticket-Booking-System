<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainticket_info extends Model
{
    use HasFactory;
    protected $table = "trainticket_infos";
    protected $primaryKey = "Train_id";
}
