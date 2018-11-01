<?php

namespace App\Http\Controllers;

use Harimayco\Menu\Models\MenuItems;
use Harimayco\Menu\Models\Menus;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * @var Menus
     */
    private $menus;
    /**
     * @var MenuItems
     */
    private $menuItems;

    /**
     * WelcomeController constructor.
     */
    public function __construct(Menus $menus, MenuItems $menuItems)
    {
        $this->menus = $menus;
        $this->menuItems = $menuItems;
    }

    public function index()
    {
        $menus = $this->menus->all();
        $menusItems = $this->menuItems->all();
        return view('menu-nav', compact('menus', 'menusItems'));
    }
}
