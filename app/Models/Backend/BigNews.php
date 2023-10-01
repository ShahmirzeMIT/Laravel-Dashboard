<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\News;
class BigNews extends Model
{
    use HasFactory;
    protected $table="openhumor";
    protected $fillable=[
        'news-id',
        'title',
        'description',
        'image'
    ];

    public function news(){
        return $this->belongsTo(News::class,'news_id','id');
    }
}
