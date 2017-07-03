<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use BrowserDetect;
class ChuyenDeController extends Controller{
	public function viemtuyentienliet(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.viemtuyentienliet');
		}else{
			//return view('web.mobile.home');
		}
	}
	public function catbaoquydau(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.catbaoquydau');
		}else{
			//return view('web.mobile.home');
		}
	}
	public function viemnhiemquydau(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.viemnhiemquydau');
		}else{
			return view('web.chuyende.mobile.viemnhiemquydau');
		}
	}
	public function suimaoga(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.suimaoga');
		}else{
			return view('web.chuyende.mobile.suimaoga');
		}
	}
	public function daibaoquydau(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.daibaoquydau');
		}else{
			return view('web.chuyende.mobile.daibaoquydau');
		}
	}
	public function nhiemtrunglieudao(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.nhiemtrunglieudao');
		}else{
			return view('web.chuyende.mobile.nhiemtrunglieudao');
		}
	}
	public function benhtuyentienliet(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.benhtuyentienliet');
		}else{
			return view('web.chuyende.mobile.benhtuyentienliet');
		}
	}
	public function vosinh(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.vosinh');
		}else{
			return view('web.chuyende.mobile.vosinh');
		}
	}
	public function lietduong(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.lietduong');
		}else{
			return view('web.chuyende.mobile.lietduong');
		}
	}
	public function tonghop(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.chuyende.mobile.tonghop');
		}else{
			return view('web.chuyende.mobile.tonghop');
		}
	}
}