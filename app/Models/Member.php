<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Member extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =['name' ,'job' ,'slug' ,'about'];
    protected $hidden =[];




    public function galleries() {
        return $this->hasMany(Gallery::class,'members_id','id');
        
    }
}
