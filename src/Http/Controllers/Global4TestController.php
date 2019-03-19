<?php

namespace Global4Communications\LaraMenu\Http\Controllers;

use App\Http\Controllers\Controller;
use Global4Communications\LaraMenu\Managers\LaraMenuManager;

class Global4TestController extends Controller
{
    protected $MenuManager;

    public function __construct()
    {
        $this->MenuManager = new LaraMenuManager(3);
    }
    public function crm()
    {
        $m = $this->MenuManager->importMenu()
            ->addMenuClass(['nav', 'navbar-nav', 'navbar-right'])
            ->render();

        return view('testmenu')->with('menu', $m);
    }
}