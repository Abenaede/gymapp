<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainerModel extends Model
{
    use HasFactory;

    
    public function member(){
        return $this->hasmany(memberModel::class);
    }
}
