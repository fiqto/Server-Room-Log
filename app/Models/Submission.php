<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $table = "submissions";
    protected $fillable = [
        'id',
        'name',
        'email',
        'origin',
        'destination_server',
        'entry_date',
        'date_time_out',
        'reason',
        'status',
    ];
}
