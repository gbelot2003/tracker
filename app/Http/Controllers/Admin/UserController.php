<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use Inertia\Inertia;

class UserController extends Controller
{
    private $params;

    public function __construct(UserService $_service)
    {
        $this->params = $_service;
    }

    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => $this->params->Users(Request::input('search')),
            'filters' => Request::only(['search']),
        ]);
    }
}
