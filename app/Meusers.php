<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Meusers extends Model{
	protected $table = 'me_users';
	protected $fillable = ['user_name','user_password'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}