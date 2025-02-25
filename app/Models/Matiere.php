<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matiere extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function ue()
    {
        return $this->belongsTo(UE::class);
    }
}
