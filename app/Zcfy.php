<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Zcfy extends Model{
	protected $table = 'zcfy_fixed_assets_official';
	protected $fillable = ['asset_tag','category','asset_name','unit','model','place','status','picture','remark','qr_code'];
	public $timestamps = true;
	protected function getDateFormat(){
		return time();
	}
	protected function asDateTime($val){
		return $val;
	}
}
