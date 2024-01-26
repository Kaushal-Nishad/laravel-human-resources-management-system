<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    // protected $primaryKey = 'documents';

    protected $fillable = [
        'id_proof',
        'resume',
        'offer_letter',
        'joining_letter',
        'employee_id'
    ];
}
