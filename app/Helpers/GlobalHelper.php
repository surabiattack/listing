<?php

/** Set Sidebar Activation */
if (!function_exists('setSidebarActivate')) {
    function setSidebarActivate(array $routes): ?string
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }

        return null;
    }
}
