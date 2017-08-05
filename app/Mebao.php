<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mebao extends Model{
	protected $table = 'me_bao';
	protected $fillable = ['name','sex','region','like','shop','collocation','taobao','is_hot'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}