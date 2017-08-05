<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Meshang extends Model{
	protected $table = 'me_shang_magazine';
	protected $fillable = ['magazine_path','magazine_theme','magazine_index','date','volume'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}