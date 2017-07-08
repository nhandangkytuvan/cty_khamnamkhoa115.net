<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use BrowserDetect;
class PostController extends Controller{
    public $term = null;
    public $term_parent = null;
    public $post_pre = null;
    public $post_next = null;
    public $post = null;
    public $post_lienquans = null;

    public function show($post_alias,$post_id,Request $request){
    	$post = Post::find($post_id);
        // check exit post
        if(!$post){
            return redirect('/');
        }
        // --------------
        //event(new VisitPostEvent($post));
        // ------------
        $term = $post->term;
        $term_parent = $term ? $term->parent : null;
        $post_pre = $term->post()->where('id','<',$post->id)->orderBy('id','desc')->first();
        $post_next = $term->post()->where('id','>',$post->id)->orderBy('id','asc')->first();
        if(BrowserDetect::isDesktop()){
            $data['post']           = $post;
            $data['term']           = $term;
            $data['term_parent']    = $term_parent;
            $data['post_pre']       = $post_pre;
            $data['post_next']      = $post_next;
        	return view('web.desktop.post3',['data'=>$data]); 
        }else{
            $post_lienquans = $term ? $term->post()->where('id','<>',$post->id)->limit(6)->get() : null;
            $data['post']           = $post;
        	$data['term']           = $term;
            $data['post_lienquans'] = $post_lienquans;
            return view('web.mobile.post',['data'=>$data]); 
        }
    }
}