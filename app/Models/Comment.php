<?php

namespace App\Models;

use App\Contracts\Commentable;
use App\Traits\HasAuthor;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;
    use HasAuthor;
    use ModelHelpers;

    const TABLE = 'comments';

    protected $table = self::TABLE;

    protected $fillable = [
      'body'
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function excerpt(int $limit = 100): string
    {
        return Str::limit($this->body(), $limit);
    }

    public function commentableRelation(): MorphTo
    {
        return $this->morphTo('commentableRelation', 'commentable_id', 'commentable_type');
    }

    public function commentable(): Commentable
    {
        return $this->commentableRelation;
    }


}
