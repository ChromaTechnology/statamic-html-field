<?php

namespace ChromaTech\HtmlField;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__.'/../public/js/html-field.js',
    ];

    protected $fieldtypes = [
        HtmlField::class,
    ];
}
