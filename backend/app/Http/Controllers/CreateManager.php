<?php

namespace App\Http\Controllers;

use App\Manager\ManagerRepositoryInterface;
use Illuminate\Http\Request;

class CreateManager extends Controller
{
    private $managerRepo;

    public function __construct(ManagerRepositoryInterface $managerRepositoryInterface)
    {
        $this->managerRepo = $managerRepositoryInterface;
    }

    public function __invoke(Request $request)
    {
        $this->managerRepo->addManager($request);
        return redirect('/login-form');
    }
}
