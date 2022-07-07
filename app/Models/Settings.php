<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_mails_alert',
        'site_status',
        'debug_mode',
    ];

    protected $casts = [
        'admin_mails_alert' => 'array'
    ];
}
