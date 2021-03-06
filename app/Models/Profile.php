<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    const TABLE = 'profiles';

    protected $table = self::TABLE;

    protected $fillable = [
        'bio',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'website',
        'mobile'
        ];

    public function bio(): string
    {
        return $this->bio;
    }
    public function facebook(): string
    {
        return $this->facebook;
    }
    public function twitter(): string
    {
        return $this->twitter;
    }
    public function instagram(): string
    {
        return $this->instagram;
    }
    public function linkedin(): string
    {
        return $this->linkedin;
    }
    public function website(): string
    {
        return $this->website;
    }
    public function mobile(): string
    {
        return $this->mobile;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
