<?php

namespace App\Http\Controllers;

use InstagramScraper\Instagram;
use Phpfastcache\Helper\Psr16Adapter;

// use Goutte\Client;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpClient\HttpClient;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function scraper()
    {
        // $client = new Client(HttpClient::create(['timeout' => 60]));
        // $crawler = $client->request('GET', 'https://twitter.com/search?q=Latest%20News&src=tyah');
        // $crawler->filter('h2')->each(function ($node) {
        //     print $node->text() . "\n";
        // });
        //a
        $instagram = Instagram::withCredentials('team_wartech', 'wartech280716', new Psr16Adapter('Files'));
        $instagram->login();
        // $stories = $instagram->getStories();
        // $instagram = new Instagram();
        $medias = $instagram->getMedias('kemenperin_ri', 5);
        $account = $instagram->getAccount('kemenperin_ri')->getFullName();
        // dd(Carbon::parse($medias[0]->getCreatedTime())->diffForHumans());
        return view('scraper', compact('medias', 'account'));
    }
}
