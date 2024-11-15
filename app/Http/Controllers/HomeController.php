<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Ad;
use App\Models\Indicator;
use App\Models\Item;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Supply;
use App\Models\Testimony;
use Illuminate\Http\Request;

class HomeController extends BasicController
{
    public $reactView = 'Home';
    public $reactRootView = 'public';

    public function setReactViewProperties(Request $request)
    {
        $sliders = Slider::where('status', true)->where('visible', true)->get();
        $indicators = Indicator::where('status', true)->where('visible', true)->get();
        $weareJpa = Aboutus::where('name', 'Somos')->first();
        $testimonies = Testimony::where('status', true)->where('visible', true)->get();
        $articles = Post::with(['category'])->where('status', true)->orderBy('post_date', 'desc')->take(6)->get();
        $items = Item::where('visible', true)->where('status', true)->get();
        $supplies = Supply::where('status', true)->where('visible', true)->where('featured', true)->get();
        $popups = Ad::today();

        return [
            'sliders' => $sliders,
            'testimonies' => $testimonies,
            'items' => $items,
            'supplies' => $supplies,
            'popups' => $popups
        ];
    }
}
