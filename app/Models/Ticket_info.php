<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket_info extends Model
{
    use HasFactory;
    protected $table = "ticket_infos";
    protected $primaryKey = "Ticket_id";
}
