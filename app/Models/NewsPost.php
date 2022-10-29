<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

     public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
 


}
 