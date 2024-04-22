<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Listing extends Model
{
    use HasFactory;


    protected $fillable = ['feature_image','user_id','title','description','roles','job_type',
                            'address','salary','application_close_date','slug'];


    public function users()
    {
       return $this->belongsToMany(User::class,'listing_user','listing_id','user_id')
       ->withPivot('shortlisted')
       ->withTimestamps();
    }


    public function profile()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}






?>