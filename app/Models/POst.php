<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;

class POst extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=[
        "catagory_id",
        "name",
        "slug",
        "description",
        "meta_title",
        "meta_description",
        "meta_keyword",
        "status",
        "created_by"
    ];
    public function catagory(){
        return $this->belongsTo(Catagory::class,'catagory_id','id');
    }
}
