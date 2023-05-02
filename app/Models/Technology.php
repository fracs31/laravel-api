<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    //Mass Assignment
    protected $fillable = [
        "name",
        "slug"
    ]; 
    //Projects
    public function projects() {
        return $this->belongsToMany(Project::class); //relazione many to many
    }
}
