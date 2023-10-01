<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table='news';
    protected $fillable=[
        'title',
        'description',
        'image',
        'created_by',
        'status'
    ];
    protected $casts = [
        'status' => 'boolean'
    ];
}
