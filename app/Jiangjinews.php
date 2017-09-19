<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Jiangjinews extends Model{
	protected $table = 'jiangji_news';
	protected $fillable = ['title','date_time','describe','news_pic','label','category',
	'is_hot','hot_pic','hot_desp','template_no'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}