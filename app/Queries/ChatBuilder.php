<?php

namespace App\Queries;

use App\Models\Message;
use App\Queries\Contracts\QueryBuilder;
use Illuminate\Database\Eloquent\{Builder, Collection};

class ChatBuilder implements QueryBuilder
{
    public function getBuilder(): Builder
    {
        return Message::query();
    }

    public function getMessageWithRelation(): Collection
    {
        return Message::query()
            ->with('user')
            ->get();
    }
}
