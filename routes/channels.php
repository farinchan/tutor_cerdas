<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('channel-reverb', function ($user) {
    return $user;
});

Broadcast::channel('chat.{roomId}', function ($user, $roomId) {
    return $user;
});