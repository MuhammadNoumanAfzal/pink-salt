<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'email',
        'phone',
        'subject',
        'country',
        'product',
        'quantity',
        'packaging',
        'private_label',
        'destination_port',
        'delivery_timeline',
        'message',
        'status',
    ];
}
