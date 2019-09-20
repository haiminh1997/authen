<?php

namespace App\Providers;

use App\Model\Admin\ConfigModel;
use App\Model\Admin\MenuItemModel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $config[] = array();
        $config[0] = 'web_name';
        $config[1] = 'header_logo';
        $config[2] = 'footer_logo';
        $config[3] = 'intro';
        $config[4] = 'desc';

        /*
         * tạo giá trị mặc định cho mảng default
         */
        $default = array();
        foreach ($config as $item_config){
            if (!isset($default[$item_config])){
                $default[$item_config] = '';
            }
        }
        /*
         * Lấy từ CSDL ra đè lại cái default
         */
        $items = ConfigModel::all();
        foreach($items as $item){
            $key = $item->name;
            $default[$key] = $item->value;
        }
        $global_settings = $default;
        $menus_items_header = MenuItemModel::getMenuItemsByHeader();
        $menu_header = MenuItemModel::getMenu($menus_items_header);
        $menus_items_footer1 = MenuItemModel::getMenuItemsByFooter1();
        $menus_items_footer2 = MenuItemModel::getMenuItemsByFooter2();
        $menus_items_footer3 = MenuItemModel::getMenuItemsByFooter3();

//   $cartTotalQuantity = \Cart::getTotalQuantity();

//  View::share('fe_cartTotalQuantity', $cartTotalQuantity);

        View::share('fe_global_settings', $global_settings);
        View::share('fe_menus_items_header', $menus_items_header);
        View::share('fe_menu_header', $menu_header);
        View::share('fe_menus_items_footer1', $menus_items_footer1);
        View::share('fe_menus_items_footer2', $menus_items_footer2);
        View::share('fe_menus_items_footer3', $menus_items_footer3);
    }
}
