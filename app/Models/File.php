<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        "_token"
    ];

    public function scientific_works(): belongsToMany
    {
        return $this->belongsToMany(ScientificWork::class);
    }
}
