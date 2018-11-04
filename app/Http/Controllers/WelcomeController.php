<?php

namespace App\Http\Controllers;

use Harimayco\Menu\Models\MenuItems;
use Harimayco\Menu\Models\Menus;
use Illuminate\Http\Request;
use Harimayco\Menu\Facades\Menu;

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
        /*
        Parameter: Menu ID
        Return: Array
        */
        //exemplo com menu separado
        $collection = $this->menus->all();
        foreach ($collection as $key => $collect){
            $menuList[$collect->name] = Menu::get($collect->id);
        }

        $menuItems = Menu::get(1);
        return view('menu-nav', compact('menuList', 'menuItems'));
    }
}
