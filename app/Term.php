<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Term extends Model{
    protected $table = 'term';
    public $fillable = ['id','user_id','term_id','term_avatar','term_name','term_alias','term_description','term_keyword','term_meta'];
    public static $rules = [
        'term_name' => 'required',
    ];
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function post(){
    	return $this->hasMany('App\Post','term_id','id');
    }
    public function visit(){
        return $this->hasOne('App\Visit','term_id','id');
    }
    public function parent(){
    	return $this->belongsTo('App\Term','term_id','id');
    }
    public function children(){
        return $this->hasMany('App\Term','term_id','id');
    }
}
