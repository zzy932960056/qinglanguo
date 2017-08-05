<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Menews extends Model{
	protected $table = 'me_news';
	protected $fillable = ['little_pic','title','description','date','kind','head_pic'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}