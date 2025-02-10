<?php
function setActive(string $ruta): string
{
    return request()->routeIs($ruta) ? 'active: text-xl' : '';
}