<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount',
        'password',
    ];

    public static $rules = [
        'title' =>   'required|max:255|min:3',
        'amount' =>  'required|numeric'
    ];
}
