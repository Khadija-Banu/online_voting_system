<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VoterDetail;

class Vote extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function voterdetails(){
        return $this->hasMany(VoterDetail::class);
    }

}
