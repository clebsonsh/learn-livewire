<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
    ];

    protected function casts(): array
    {
        return [
            'is_archived' => 'boolean',
        ];
    }

    public function scopeNotArchived(Builder $query): void
    {
        $query->whereNot('is_archived', true);
    }

    public function archive(): void
    {
        $this->is_archived = true;
        $this->save();
    }

    public function recover(): void
    {
        $this->is_archived = false;
        $this->save();
    }
}
