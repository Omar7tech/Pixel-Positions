<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position_id',
    ];

    /**
     * Get the positions that the tag is associated with.
     */
    public function positions(): BelongsToMany
    {
        return $this->belongsToMany(Position::class);
    }

}
