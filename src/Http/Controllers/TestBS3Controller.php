<?php

namespace Rinjax\LaraMenu\Http\Controllers;

use App\Http\Controllers\Controller;
use Rinjax\LaraMenu\Managers\LaraMenuManager;

class TestBS3Controller extends Controller
{
    protected $MenuManager;

    public function __construct()
    {
        $this->MenuManager = new LaraMenuManager(3);
    }
    public function standard()
    {

    }
}