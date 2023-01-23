<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
class Quiz extends Model
{
    use HasFactory;
    protected $fillable=[
        'categorie_id','quetion',"option1",'option2',
        'option3','option4','answer'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
