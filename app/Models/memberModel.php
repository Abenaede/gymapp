<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\trainerModel;

class memberModel extends Model
{
    // use HasFactory;//

    public function mytrainer(){
        return $this->belongsTo(trainerModel::class);
    }


}
