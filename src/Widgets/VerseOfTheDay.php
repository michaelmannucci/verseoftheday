<?php

namespace Michaelmannucci\VerseOfTheDay\Widgets;

use Statamic\Widgets\Widget;
use Facades\GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Cache;

class VerseOfTheDay extends Widget
{
    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {
        $verse = $this->getVerse();

        return view('michaelmannucci::widgets.verse-of-the-day', ['verse' => $verse]);
    }
    /**
     * Get 'votd' from 'biblegateway'.
     *
     * @return array
     */
    protected function getVerse()
    {
        $version = $this->config('version', 'NIV');
        $response = Guzzle::request('GET', "https://www.biblegateway.com/votd/get/?format=json&version=$version", [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
