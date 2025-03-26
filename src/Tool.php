<?php

namespace Opscale\NovaAuth0;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool as NovaTool;

class Tool extends NovaTool
{
    public function boot()
    {
        Nova::script('nova-auth0', __DIR__ . '/../dist/js/tool.js');
        Nova::style('nova-auth0', __DIR__ . '/../dist/css/tool.css');
    }

    public function menu(Request $request)
    {
        return MenuSection::make('NovaAuth0')
            ->path('nova-auth0')
            ->icon('server');
    }
}
