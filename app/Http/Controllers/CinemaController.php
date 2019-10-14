<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Film;

class CinemaController extends Controller
{
   public function index()
    {
		Film::query()->delete();
		$curl=curl_init("https://cityopen.ru/afisha/kinoteatr-salavat/");
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
		$t=curl_exec($curl);
		curl_close($curl);
		$bodyContent=explode('<body',$t);
		$tableContent=explode('<table',$bodyContent[1]);
		$tableRows=explode('<tr>', $tableContent[3]);	
		$countArr=count($tableRows);
		for ($i=2;$i<$countArr;$i++)
		{
			$tableRow=$tableRows[$i];
			$tableItems=explode('</td>',$tableRow);
			$film=new Film();
			$starts=explode('>',$tableItems[0]);
			$name=explode('>',$tableItems[1]);
			$category=explode('>',$tableItems[2]);
			$price=explode('>',$tableItems[3]);	
			$filmname=explode('<',$name[2]);	
			$film->starts=$starts[1];
			$film->filmname=$filmname[0];
			$film->category=$category[1];
			$film->price=$price[1];
			$film->save();
		}
	return redirect('/');	
	}
   public function show()
    {
		$films=Film::all();
		return view('filmtable',['films'=>$films]);
	}
}
