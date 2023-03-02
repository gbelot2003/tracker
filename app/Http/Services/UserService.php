<?php

namespace App\Http\Services;

use App\Models\User;
use App\Http\Resources\UserResource;


class UserService
{
    public function User($request)
    {
        $users = UserResource::collection(
            User::query()
                ->when($request, function ($query, $search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                    $query->orWhere('email', 'LIKE', "%{$search}%");
                })
                ->orderBy('id', 'DESC')
                ->paginate(15)
                ->withQueryString()

        );

        return $users;
    }
}
