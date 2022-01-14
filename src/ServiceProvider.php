<?php

namespace michaelmannucci\VerseOfTheDay;

use Statamic\Providers\AddonServiceProvider;
use michaelmannucci\VerseOfTheDay\Widgets\VerseOfTheDay;

class ServiceProvider extends AddonServiceProvider
{
    protected $viewNamespace = 'michaelmannucci';

    protected $widgets = [
        VerseOfTheDay::class
    ];
}
