<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    // Validasi untuk memastikan user sudah login
    if (!$user) {
        return false;
    }

    // Pastikan ID yang diterima adalah integer
    if (!is_numeric($id)) {
        return false;
    }

    // Cek apakah ID user yang sedang login sesuai dengan channel
    return (int) $user->id === (int) $id;
});
