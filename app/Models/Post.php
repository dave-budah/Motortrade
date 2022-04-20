<?php

namespace App\Models;

use App\Casts\TitleCasts;
use App\Contracts\Commentable;
use App\Traits\HasAuthor;
use App\Traits\HasBrands;
use App\Traits\HasComments;
use App\Traits\HasRadii;
use App\Traits\HasTags;
use App\Traits\HasVehicles;
use App\Traits\HasWidths;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model implements Commentable
{
    use HasFactory;
    use HasAuthor;
    use HasTags;
    use HasVehicles;
    use HasBrands;
    use HasWidths;
    use HasRadii;
    use HasComments;

    const TABLE = 'posts';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'image',
        'price',
        'published_at',
        'author_id',
        'photo_credit_text',
        'photo_credit_link',
    ];

    protected $with = [
        'authorRelation',
        'tagsRelation',
        'commentsRelation',
        'brandsRelation',
        'vehiclesRelation',
        'widthsRelation',
        'radiiRelation',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'title' => TitleCasts::class,
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function image(): string
    {
        return $this->image;
    }
    public function price(): string
    {
        return $this->price;
    }

    public function photoCreditText(): string
    {
        return $this->photo_credit_text;
    }

    public function photoCreditLink(): string
    {
        return $this->photo_credit_link;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body()), $limit);
    }


    public function delete()
    {
        $this->removeTags();
        $this->removeVehicles();
        $this->removeBrands();
        $this->removeWidths();
        $this->removeRadii();
        parent::delete();
    }
    public function commentableTitle(): string
    {
        return $this->title();
    }
}
