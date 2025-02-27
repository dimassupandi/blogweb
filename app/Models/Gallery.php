<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =['members_id' ,'image'];
    protected $hidden =[];


    public function member() {
        return $this->belongsTo(Member::class, 'members_id','id');
        
    }
}
