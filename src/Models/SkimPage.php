<?php

namespace Ijpatricio\Skim\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SkimPage extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'content' => 'json',
    ];

    public function website(): BelongsTo
    {
        return $this->belongsTo(SkimWebsite::class);
    }
}
