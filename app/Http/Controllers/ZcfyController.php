<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ZcfyController extends Controller
{
    public function index(){
    	  $data = [];
        $asset_tag = $_GET['asset_tag'];
        $info = DB::table('zcfy_fixed_assets_official')->where('asset_tag',$asset_tag)->get();
        if($info){
            $id = $info[0]->id;
            $asset_tag = $info[0]->asset_tag;
            $category = $info[0]->category;
            $asset_name = $info[0]->asset_name;
            $unit = $info[0]->unit;
            $model = $info[0]->model;
            $place = $info[0]->place;
            $status = $info[0]->status;
            $picture = $info[0]->picture;
            $remark = $info[0]->remark;
            $qr_code = $info[0]->qr_code;
            $actual = DB::table('zcfy_fixed_assets_actual')->where('asset_tag',$asset_tag)->get();
            if($actual){
                $num = DB::table('zcfy_fixed_assets_actual')->where('asset_tag',$asset_tag)->delete();
                if($num){
                    $bool = DB::table('zcfy_fixed_assets_actual')->insert(
                        ['asset_tag'=>$asset_tag,'category'=>$category,
                        'asset_name'=>$asset_name,'unit'=>$unit,
                        'model'=>$model,'place'=>$place,
                        'status'=>$status,'picture'=>$picture,
                        'remark'=>$remark,'qr_code'=>$qr_code]
                        );
                }
            }else{
                $bool = DB::table('zcfy_fixed_assets_actual')->insert(
                    ['asset_tag'=>$asset_tag,'category'=>$category,
                    'asset_name'=>$asset_name,'unit'=>$unit,
                    'model'=>$model,'place'=>$place,
                    'status'=>$status,'picture'=>$picture,
                    'remark'=>$remark,'qr_code'=>$qr_code]
                    );
            }
            $data['info'] = (array)$info[0];
            return view('yd_zcfy',$data);
        }else{
            return view('yd_zcfy_404');
        }
    }

}
