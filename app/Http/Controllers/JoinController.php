<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Mejoin;
class JoinController extends Controller
{   
    public function join_index(){
        session_start();
        $join = Mejoin::paginate(5);
        return view('join',[
                'join'=>$join,
            ]);
    }

    public function join_doDelete(){
        $id = $_POST['jid'];
        $num = DB::table('me_join')->where('id',$id)->delete();
        if($num == 1){
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function join_insert(){
        session_start();
        return view('join_insert');
    }

    public function join_doInsert(){
        $kind = $_POST['kind'];
        $pic_path = $_POST['pic_path'];
        $introduce = $_POST['introduce'];
        if($kind == ''){
            echo "<script>alert('伙伴种类不能为空')</script>";
            return self::join_insert();
        }else if($kind != '品牌' && $kind != '媒体' && $kind != '伙伴'){
            echo "<script>alert('请输入正确的伙伴种类')</script>";
            return self::join_insert();
        }else if($pic_path == ''){
            echo "<script>alert('介绍图路径不能为空')</script>";
            return self::join_insert();
        }elseif($introduce == ''){
            echo "<script>alert('伙伴介绍不能为空')</script>";
            return self::join_insert();
        }
        $bool = DB::table('me_join')->insert(
            ['kind'=>$kind,'pic_path'=>$pic_path,'introduce'=>$introduce]
            );
        if($bool){
            return redirect('/join/index');
        }else{
            return redirect()->back();
        }
    }

    public function join_update($id){
        session_start();
        $jid = $id;
        $data = [];
        $join = DB::table('me_join')->where('id',$jid)->get();
        $data['join'] = (array)$join[0];
        return view('join_update',$data);
    }

    public function join_doUpdate($id){
        $kind = $_POST['kind'];
        $pic_path = $_POST['pic_path'];
        $introduce = $_POST['introduce'];
        if($kind == ''){
            echo "<script>alert('伙伴种类不能为空')</script>";
            return self::join_update($id);
        }else if($kind != '品牌' && $kind != '媒体' && $kind != '伙伴'){
            echo "<script>alert('请输入正确的伙伴种类')</script>";
            return self::join_update($id);
        }else if($pic_path == ''){
            echo "<script>alert('介绍图路径不能为空')</script>";
            return self::join_update($id);
        }elseif($introduce == ''){
            echo "<script>alert('伙伴介绍不能为空')</script>";
            return self::join_update($id);
        }
        $num = DB::table('me_join')->where('id',$id)->update(
                ['kind'=>$kind,
                 'pic_path'=>$pic_path,
                 'introduce'=>$introduce]
            );
        if($num == 1){
            return redirect('/join/index');
        }else{
            return redirect()->back();
        }
    }
}