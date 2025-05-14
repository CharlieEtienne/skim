<?php

namespace Ijpatricio\Skim\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SkimWebsite extends Model
{
    protected $guarded = ['id'];

    public function pages(): HasMany
    {
        return $this->hasMany(SkimPage::class);
    }
}
