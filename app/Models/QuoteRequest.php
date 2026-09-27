<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'quote_number',
        'full_name',
        'company_name',
        'email',
        'phone',
        'destination_country',
        'destination_port',
        'target_date',
        'items',
        'notes',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
    ];
}

