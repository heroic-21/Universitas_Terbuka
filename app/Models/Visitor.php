<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = ['ip', 'user_agent', 'visited_at'];
    public $timestamps = false; // jika created_at/updated_at tidak ada
}