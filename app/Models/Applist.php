<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applist extends Model
{
    use HasFactory;

    protected $table = 'applists';
    protected $fillable = [
        "name",
        "description",
        "action",
    ];
}
