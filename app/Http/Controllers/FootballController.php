<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footballmatch;
use DOMDocument;

class FootballController extends Controller
{
	public function index()
	{
		footballmatch::query()->delete();
		$internalErrors = libxml_use_internal_errors(true);
		$content = file_get_contents('https://www.marathonbet.ru/su/popular/Football');
		$dom = new DOMDocument;
		
		$dom->loadHTML($content);
		$element=$dom->getElementById('events_content');
		$divs = $element->getElementsByTagName('div');
		foreach ($divs as $div) {
			$f=$div->getAttribute('class');
			if ($f=='bg coupon-row') 			
			{	
				$StringOne=$div->getAttribute('data-event-name');
				$ArrTemp=explode("-",$StringOne);
				$footbalmatch=new footballmatch();
				$footbalmatch->comandOne=trim($ArrTemp[0]);
				$footbalmatch->comandTwo=trim($ArrTemp[1]);
				$footbalmatch->url=$div->getAttribute('data-event-path');			
				$footbalmatch->htmlblock="";
				$tds = $div->getElementsByTagName('td');
				foreach ($tds as $td) 
					{
					$f=$td->getAttribute('class');
					if ($f=='date') 			
						{	
						$footbalmatch->matchtime=trim($td->textContent);

						}			
					}	
				$footbalmatch->save();				
			}			
		}

		for ($i=3;$i<20;$i++)
		{
			$t='';
			$contentsOne = file_get_contents('https://www.marathonbet.ru/su/popular/Football?page='.$i.'&pageAction=getPage&_='.time());
			$z=json_decode($contentsOne);
			$t=$t.$z[0]->content;
			$doc = new DOMDocument;
			$doc->loadHTML('<?xml encoding="utf-8" ?>'.$t);
			$divs = $doc->getElementsByTagName('div');
			foreach ($divs as $div)
				{
					$f=$div->getAttribute('class');
					if ($f=='bg coupon-row') 
					{	
						$StringOne=$div->getAttribute('data-event-name');
						$ArrTemp=explode("-",$StringOne);
						$footbalmatch=new footballmatch();
						$footbalmatch->comandOne=trim($ArrTemp[0]);
						$footbalmatch->comandTwo=trim($ArrTemp[1]);
						$footbalmatch->url=$div->getAttribute('data-event-path');			
						$footbalmatch->htmlblock="";
						$tds = $div->getElementsByTagName('td');
						foreach ($tds as $td) 
							{
							$f=$td->getAttribute('class');
							if ($f=='date') 			
								{	
								$footbalmatch->matchtime=trim($td->textContent);

								}			
							}	
						$footbalmatch->save();						
					}			
				}	
			 unset($doc);		
		}
		$footbalContent=footballmatch::all();
		return view('football',['content'=>$footbalContent]);	
	}
	
	
	public function detail($id)
	{	
		$internalErrors = libxml_use_internal_errors(true);
		$footbalmatch=footballmatch::find($id);
		$content = file_get_contents('https://www.marathonbet.ru/su/popular/'.$footbalmatch->url);
		$dom = new DOMDocument;		
		$dom->loadHTML($content);
		$element=$dom->getElementById('events_content');
		$footbalmatch->htmlblock=$element->ownerDocument->saveHTML($element);
		$footbalmatch->save();		
		return view('match',['content'=>$footbalmatch]);	
	}
	
	
	public function test()
	{

	}
	
	public function process(Request $request)
	{

	}	
}
