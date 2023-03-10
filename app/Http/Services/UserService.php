<?php

namespace App\Http\Services;

use App\Models\User;
use App\Http\Resources\UserResource;


class UserService
{
    private $userResource;
    private $user_model;

    public function __construct(User $_user)
    {
        $this->user_model = $_user;
        $this->userResource = new UserResource($this->user_model);
    }

    public function Users($request)
    {
        $users = $this->userResource::collection(
            $this->user_model::query()
                ->when($request, function ($query, $search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                    $query->orWhere('email', 'LIKE', "%{$search}%");
                })
                ->orderBy('id', 'DESC')
                ->paginate(10)
                ->withQueryString()
        );

        return $users;
    }
}
