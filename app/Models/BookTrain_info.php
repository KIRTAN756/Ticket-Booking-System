<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTrain_info extends Model
{
    use HasFactory;
    protected $table = "book_train_infos";
    protected $primaryKey = "BookedTrain_id";
}
