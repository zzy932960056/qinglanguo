<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mebaovideo extends Model{
	protected $table = 'me_bao_video';
	protected $fillable = ['video_img','video_title','video_content','video_path','is_hot'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}