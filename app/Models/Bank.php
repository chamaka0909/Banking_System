<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'bankdetails';
    protected $primaryKey = 'id';
    protected $fillable = ['accountno', 'bankname', 'branch','branchcode'];
}
