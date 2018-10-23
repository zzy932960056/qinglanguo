<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class News extends Model{
	protected $table = 'qlg_news';
	protected $fillable = ['news_title','news_date','news_season','news_sort'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}
