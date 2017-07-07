<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use App;
use App\Events\VisitTermEvent;
use BrowserDetect;
class TermController extends Controller{
    public function show($term_alias,$term_id,Request $request){
        $term = Term::find($term_id);
        if(!$term){
            return redirect('/');
        }
        // -----------
        //event(new VisitTermEvent($term));
        // -----------
        $data['term'] = $term;
        if(BrowserDetect::isDesktop()){
            switch ($term_id) {
                case 33:
                    return view('web.desktop.thietbi',['data'=>$data]); 
                    break;
                case 32:
                    return view('web.desktop.term3',['data'=>$data]); 
                    break;
                case 34:
                    return view('web.desktop.term3',['data'=>$data]); 
                    break;
                // termParent
                case 22:
                    $termChilds = $term->children;
                    $postNews = App\Post::whereIn('term_id',[23,24,25,26])->limit(3)->orderBy('id','desc')->get();
                    return view('web.desktop.termParent',['data'=>$data,'postNews'=>$postNews,'termChilds'=>$termChilds]);
                    break;
                case 17:
                    $termChilds = $term->children;
                    $postNews = App\Post::whereIn('term_id',[18,19,20,21])->limit(3)->orderBy('id','desc')->get();
                    return view('web.desktop.termParent',['data'=>$data,'postNews'=>$postNews,'termChilds'=>$termChilds]);
                    break;
                case 12:
                    $termChilds = $term->children;
                    $postNews = App\Post::whereIn('term_id',[13,14,15,16])->limit(3)->orderBy('id','desc')->get();
                    return view('web.desktop.termParent',['data'=>$data,'postNews'=>$postNews,'termChilds'=>$termChilds]);
                    break;
                case 7:
                    $termChilds = $term->children;
                    $postNews = App\Post::whereIn('term_id',[8,9,10,35])->limit(3)->orderBy('id','desc')->get();
                    return view('web.desktop.termParent',['data'=>$data,'postNews'=>$postNews,'termChilds'=>$termChilds]);
                    break;
                case 2:
                    $termChilds = $term->children;
                    $postNews = App\Post::whereIn('term_id',[3,4,5,6])->limit(3)->orderBy('id','desc')->get();
                    return view('web.desktop.termParent',['data'=>$data,'postNews'=>$postNews,'termChilds'=>$termChilds]);
                    break;
                // endtermParent
                default:
                    return view('web.desktop.term3',['data'=>$data]); 
                    break;
            }
        }else{
            switch ($term_id) {
                case 33:
                    return view('web.mobile.term',['data'=>$data]);
                    break;
                case 32:
                    return view('web.mobile.kythuat',['data'=>$data]);
                    break;
                case 34:
                    return view('web.mobile.hoiphuc',['data'=>$data]); 
                    break;
                default:
                    return view('web.mobile.term',['data'=>$data]);  
                    break;
            }
        }
    }
}