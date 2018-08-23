<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager\ManagerRepositoryInterface;

class Login extends Controller
{
    private $managerRepo;

    public function __construct(ManagerRepositoryInterface $managerRepositoryInterface)
    {
        $this->managerRepo = $managerRepositoryInterface;
    }

    public function __invoke(Request $request)
    {
        session()->forget('user');
        $this->managerRepo->login($request);
        if (session('user')) {
            return redirect('/');
        } else {
            return redirect('/login-form');
        }
    }
}
