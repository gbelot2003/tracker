<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\UserResource;
use App\Http\Services\UserService;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    private $params;

    public function __construct()
    {
        $this->params = new UserService();
    }

    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => $this->params->User(Request::input('search')),
            'filters' => Request::only(['search']),
        ]);
    }
}
