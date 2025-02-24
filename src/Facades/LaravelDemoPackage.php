<?php

namespace ImoTikuwa\LaravelDemoPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ImoTikuwa\LaravelDemoPackage\LaravelDemoPackage
 */
class LaravelDemoPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ImoTikuwa\LaravelDemoPackage\LaravelDemoPackage::class;
    }
}
