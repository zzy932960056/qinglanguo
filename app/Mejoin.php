<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mejoin extends Model{
	protected $table = 'me_join';
	protected $fillable = ['kind','screen','pic_path','introduce'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}