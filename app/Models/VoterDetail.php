<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vote;

class VoterDetail extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function vote()
    {
        return $this->belongsTo(Vote::class);
    }
}
