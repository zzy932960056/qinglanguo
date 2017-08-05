<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mexiu extends Model{
	protected $table = 'me_xiu_video_third';
	protected $fillable = ['video_pic_path','video_title','video_describe','video_path'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}