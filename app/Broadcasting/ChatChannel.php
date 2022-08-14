<?php

namespace App\Broadcasting;

class ChatChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\Models\User  $user
     * @return array|bool
     */
    public function join(User $user): bool
    {
        return auth()->check();
    }
}
