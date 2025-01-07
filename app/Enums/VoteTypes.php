<?php

namespace App\Enums;

enum VoteTypes: string
{
    case Upvote = 'upvote';
    case DownVote = 'downvote';
    case None = 'none';

    public static function values(): array
    {
        return array_map(fn($enum) => $enum->value, self::cases());
    }
}
