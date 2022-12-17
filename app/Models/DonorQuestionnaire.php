<?php

namespace App\Models;

use App\Models\Donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DonorQuestionnaire extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function donor() {
    //     return $this->belongsTo(Donor::class);
    // }
}
