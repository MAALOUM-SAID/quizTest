<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie; 
class Score extends Model
{
    use HasFactory;
    protected $fillable=[
        'categorie_id','score'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
