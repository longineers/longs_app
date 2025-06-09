<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdvertiserUser extends Model
{
    protected $fillable = ['advertiser_id', 'user_id', 'role'];

    public function advertiser(): BelongsTo
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}