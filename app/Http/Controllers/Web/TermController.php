<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use App;
//use App\Events\VisitTermEvent;
use BrowserDetect;
class TermController extends Controller{
    public $term = null;
    public $term_parent = null;
    public $term_childs = null;
    public $post_recent_terms = null;
    public $post_recent_childs = null;

    public function show($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        // check exit term
        if(!$term){
            return redirect('/');
        }
        // -----------
        //event(new VisitTermEvent($term));
        // -----------
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    $data['term'] = $term;
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                // termParent
                case 22:
                    $term_childs = $term->children;
                    $post_recent_terms = App\Post::whereIn('term_id',[23,24,25,26])->limit(3)->orderBy('id','desc')->get();
                    $data['term'] = $term;
                    $data['term_childs'] = $term_childs;
                    $data['post_recent_terms'] = $post_recent_terms;
                    return view('web.desktop.termParent',['data'=>$data]);
                    break;
                case 17:
                    $term_childs = $term->children;
                    $post_recent_terms = App\Post::whereIn('term_id',[18,19,20,21])->limit(3)->orderBy('id','desc')->get();
                    $data['term'] = $term;
                    $data['term_childs'] = $term_childs;
                    $data['post_recent_terms'] = $post_recent_terms;
                    return view('web.desktop.termParent',['data'=>$data]);
                    break;
                case 12:
                    $term_childs = $term->children;
                    $post_recent_terms = App\Post::whereIn('term_id',[13,14,15,16])->limit(3)->orderBy('id','desc')->get();
                    $data['term'] = $term;
                    $data['term_childs'] = $term_childs;
                    $data['post_recent_terms'] = $post_recent_terms;
                    return view('web.desktop.termParent',['data'=>$data]);
                    break;
                case 7:
                    $term_childs = $term->children;
                    $post_recent_terms = App\Post::whereIn('term_id',[8,9,10,35])->limit(3)->orderBy('id','desc')->get();
                    $data['term'] = $term;
                    $data['term_childs'] = $term_childs;
                    $data['post_recent_terms'] = $post_recent_terms;
                    return view('web.desktop.termParent',['data'=>$data]);
                    break;
                case 2:
                    $term_childs = $term->children;
                    $post_recent_terms = App\Post::whereIn('term_id',[3,4,5,6])->limit(3)->orderBy('id','desc')->get();
                    $data['term'] = $term;
                    $data['term_childs'] = $term_childs;
                    $data['post_recent_terms'] = $post_recent_terms;
                    return view('web.desktop.termParent',['data'=>$data]);
                    break;
                // endtermParent
                default:
                    $term_parent = $term->parent;
                    $post_terms = $term->post()->paginate(15);
                    $data['term'] = $term;
                    $data['term_parent'] = $term_parent;
                    $data['post_terms'] = $post_terms;
                    return view('web.desktop.term3',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                default:
                    $post_terms = $term->post()->paginate(6);
                    $data['term'] = $term;
                    $data['post_terms'] = $post_terms;
                    return view('web.mobile.term',['data'=>$data]);
                    break;
            }
        }
    }
}