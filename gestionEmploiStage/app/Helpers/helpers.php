<?php

function setMenuActive($route)
{
    $routeActuel = request()->route()->getName();
    if($routeActuel === $route)
    {
        return 'active';
    }
    return "";
}
