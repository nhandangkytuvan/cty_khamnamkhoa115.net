<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Term;
use View;
use Response;
use BrowserDetect;
class HomeController extends Controller{
	public function show(Request $request){
		if(BrowserDetect::isDesktop()){
			$post_vosinhs = Post::whereIn('term_id',[23,24,25,26])->limit(5)->orderBy('id','desc')->get();
			$post_tuyentienliets = Post::whereIn('term_id',[3,4,5,6])->limit(5)->orderBy('id','desc')->get();
			$post_roiloans = Post::whereIn('term_id',[8,9,10,35])->limit(5)->orderBy('id','desc')->get();
			$post_chinhhinhs = Post::whereIn('term_id',[13,14,15,16])->limit(5)->orderBy('id','desc')->get();
			$post_viems = Post::whereIn('term_id',[18,19,20,21])->limit(6)->orderBy('id','desc')->get();
			return view('web.desktop.home3',['post_vosinhs'=>$post_vosinhs,'post_tuyentienliets'=>$post_tuyentienliets,'post_roiloans'=>$post_roiloans,'post_chinhhinhs'=>$post_chinhhinhs,'post_viems'=>$post_viems]);
		}else{
			return view('web.mobile.home');
		}
	}
	public function about(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.about');
		}else{
			return view('web.mobile.about');
		}
	}
	public function address(Request $request){
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.address');
		}else{
			return view('web.mobile.address');
		}
	}
	public function search(Request $request){
		$posts = Post::where('post_name','like','%'.$request->input('keyword').'%')->where('post_status',1)->paginate(10);
		$data['posts'] = $posts;
		if(BrowserDetect::isDesktop()){
			return view('web.desktop.search',['data'=>$data]);
		}else{
			return view('web.mobile.search',['data'=>$data]);
		}
	}
	public function sitemap(Request $request){
		$posts = Post::where('post_status',1)->get();
		$terms = Term::get();
		$data['posts'] = $posts;
		$data['terms'] = $terms;
		$content = View::make('web.desktop.sitemap',['data'=>$data]);
		return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
	}
}