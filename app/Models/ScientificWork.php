<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\ScientificWork
 *
 * @property int $id
 * @property string $summary
 * @property string $published_at
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ScientificWorkFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork query()
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScientificWork whereUserId($value)
 * @mixin \Eloquent
 */
class ScientificWork extends Model
{
    use HasFactory;

    protected $fillable = ['summary', 'published_at', 'user_id'];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function files(): belongsToMany
    {
        return $this->belongsToMany(File::class);
    }
}
