<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    
    public $table="ticket_tbl";

    protected $fillable = [
        'subject',
        'description',
        'categoryId',
        'groupId',
        'requestId',
        'created_at',
        'statusId'
    ];
}