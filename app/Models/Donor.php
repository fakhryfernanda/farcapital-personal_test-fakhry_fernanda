<?php

namespace App\Models;

use App\Models\DonorQuestionnaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function donorQuestionnaire() {
    //     return $this->belongsTo(DonorQuestionnaire::class);
    // }
}
