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

        return view('widgets.verse-of-the-day', ['verse' => $verse]);
    }
    /**
     * Get 'votd' from 'biblegateway'.
     *
     * @return array
     */
    protected function getVerse()
    {
        return Cache::rememberWithExpiration('michaelmannucci-verseoftheday', function () {
            try {
                $response = Guzzle::request('GET', 'https://www.biblegateway.com/votd/get/?format=json&version=ESV', [
                    'headers' => [
                        'Accept' => 'application/json',
                    ],
                ]);

                $json = json_decode($response->getBody(), true);

                return [120 => $json];
            } catch (RequestException $e) {
                return [1 => null];
            }
        });
    }
}
