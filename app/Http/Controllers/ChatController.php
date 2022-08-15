<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\MessageFormRequest;
use App\Queries\ChatBuilder;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class ChatController extends Controller
{
    public function index(): Factory|View|Application
    {
        auth()->loginUsingId(1);

        return view('chat');
    }

    public function messages(ChatBuilder $builder): Collection|array
    {
        return $builder->getMessageWithRelation();
    }

    public function send(MessageFormRequest $request)
    {
        $message = $request->user()
            ->messages()
            ->create($request->validated());

        broadcast(new MessageSent($request->user(), $message));

        return $message;
    }
}
