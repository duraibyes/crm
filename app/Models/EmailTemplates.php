<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplates extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'content',
        'status',
        'subject',
        'email_type',
        'created_by',
    ];
}
