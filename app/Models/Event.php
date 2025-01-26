<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // ระบุฟิลด์ที่สามารถใส่ข้อมูลได้
    protected $fillable = [
        'name',
        'description',
        'event_date',
        'banner',
    ];
}

