<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\People;
use App\Portfolio;
use App\Service;



class IndexController extends Controller
{
    public function execute(Request $request)
    {
    	$pages = Page::all();
    	$peoples = People::all();
    	$portfolio = Portfolio::get();
    	$services = Service::get();
    	
    	$menu = array();
    	foreach ($pages as $page) {
    		$item = array('title'=>$page->name, 'alias'=>$page->alias);
    		array_push($menu, $item);
    		
    	}

    	$item = array('title'=>'Services', 'alias'=>'service');
    	array_push($menu, $item);

    	$item = array('title'=>'Portfolio', 'alias'=>'portfolio');
    	array_push($menu, $item);

    	

    	$item = array('title'=>'Team', 'alias'=>'team');
    	array_push($menu, $item);

    	$item = array('title'=>'Contact', 'alias'=>'contact');
    	array_push($menu, $item);

    	// dd($menu);
        return view('site.index', array(
        	'menu'=>$menu, 'portfolio'=>$portfolio, 'services'=>$services, 'peoples'=>$peoples));
    }
}
