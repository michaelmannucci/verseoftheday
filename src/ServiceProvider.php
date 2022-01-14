<?php

namespace Michaelmannucci\VerseOfTheDay;

use Statamic\Providers\AddonServiceProvider;
use Michaelmannucci\VerseOfTheDay\Widgets\VerseOfTheDay;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'michaelmannucci';

    protected $widgets = [
        VerseOfTheDay::class
    ];
}
