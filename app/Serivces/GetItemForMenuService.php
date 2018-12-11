<?php
/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 11.12.2018
 * Time: 19:50
 */

namespace App\Serivces;


use App\menu;

class GetItemForMenuService
{
    public function getmenus()
    {
        return menu::all();
    }
}