<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [ 'created_at', 'updated_at'];


    public function risk(){
        return $this->hasMany(Risk::class);
    }
    public function opportunity(){
        return $this->hasMany(Opportunity::class);
    }
}