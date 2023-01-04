<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function updates_risks(){
        return $this->hasMany(UpdatesRisk::class);
    }
    // public function getRisksCount()
    // {
    //     $risks = risks::where('id', '<=', $risk->id)->get();
    //     $riskCount = $risks->count();
    // }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}