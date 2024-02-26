<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Zcfy;
use Excel;
class ZcfyadminController extends Controller
{
    //登录
    public function login(){
    	return view('zcfy_login');
    }

    //登出
    public function logout(){
        session_start();
        session_destroy();
        return view('zcfy_login');
    }

    //登录验证
    public function doLogin(){
    	  $user_name = $_POST['username'];
    	  $user_pwd = $_POST['password'];
        $user_pwd = md5($user_pwd);
        $admin = DB::table('zcfy_admin')->where(['username'=>$user_name ,'password'=>$user_pwd])->get();
        if($admin){
            @session_start();
            $_SESSION['admin_name'] = $user_name;
            return redirect('/zcfy/index');
        }else{
            echo "<script>alert('请输入正确账号或密码')</script>";
            return self::login();
        }
    }

    //修改当前管理员资料
    public function update(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $admin_name = $_SESSION['admin_name'];
        $admin = DB::table('zcfy_admin')->where(['username'=>$admin_name])->get();
        $data = [];
        $data['admin'] = $admin;
        return view('zcfy_self_update',$data);
    }

    //do修改当前管理员资料
    public function doUpdate(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $admin_name = $_SESSION['admin_name'];
        $aname = $_POST['aname'];
        $apwd = $_POST['apwd'];
        $reapwd = $_POST['reapwd'];
        if($apwd == '' || $reapwd == ''){
            echo "<script>alert('密码不能为空')</script>";
            return self::update();
        }else if($apwd != $reapwd){
            echo "<script>alert('两次密码输入不一致')</script>";
            return self::update();
        }
        $admin = DB::table('zcfy_admin')->where(['username'=>$admin_name])->get();
        $apwd =md5($apwd);
        if($apwd == $admin[0]->password){
            echo "<script>alert('与原密码一致,无需修改')</script>";
            return self::update();
        }
        $num = DB::table('zcfy_admin')->where('username',$admin_name)->update(
                ['username'=>$aname,
                 'password'=>$apwd]
            );
        if($num == 1){
            echo "<script>alert('基本信息修改成功,请重新登陆')</script>";
            return self::login();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::update();
        }
    }

    //后台上锁
    public function adminLock(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        return view('zcfy_extra_lock');
    }

    //锁屏登录
    public function lockLogin(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $admin_name = $_SESSION['admin_name'];
        $admin_pwd = $_POST['apwd'];
        $admin_pwd = md5($admin_pwd);
        $admin = DB::table('zcfy_admin')->where(['username'=>$admin_name ,'password'=>$admin_pwd])->get();
        if(empty($admin)){
            echo "<script>alert('请输入正确密码')</script>";
            return self::adminLock();
        }else if($admin){
            return self::index();
        }
    }

    //管理员展示
    public function admin(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $admin_name = $_SESSION['admin_name'];
        $admin_info = DB::table('zcfy_admin')->where(['username'=>$admin_name])->get();
        if(empty($admin_info)){
            return redirect('/zcfy/login');
        }
        $data = [];
        $admin = DB::table('zcfy_admin')->orderBy('id','asc')->get();
        $data['admin'] = $admin;
        return view('zcfy_admin',$data);
    }

    //管理员删除
    public function admin_doDelete(){
        $id = $_POST['cid'];
        $num = DB::table('zcfy_admin')->where('id',$id)->delete();
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

    //管理员新增
    public function admin_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        return view('zcfy_admin_insert');
    }

    //do管理员新增
    public function admin_doInsert(){
        $aname = $_POST['aname'];
        $apwd = $_POST['apwd'];
        $reapwd = $_POST['reapwd'];
        $admin = DB::table('zcfy_admin')->where(['username'=>$aname])->get();
        if($aname == ''){
            echo "<script>alert('用户名不能为空')</script>";
            return self::admin_insert();
        }else if($admin){
            echo "<script>alert('用户名重复')</script>";
            return self::admin_insert();
        }else if($apwd == '' || $reapwd == ''){
            echo "<script>alert('密码不能为空')</script>";
            return self::admin_insert();
        }else if($apwd != $reapwd){
            echo "<script>alert('两次密码输入不一致')</script>";
            return self::admin_insert();
        }
        $apwd = md5($apwd);
        $bool = DB::table('zcfy_admin')->insert(
            ['username'=>$aname,'password'=>$apwd]
            );
        if($bool){
            echo "<script>alert('新增成功')</script>";
            return self::admin();
        }else{
            echo "<script>alert('新增失败')</script>";
            return self::admin();
        }
    }

    //管理员编辑
    public function admin_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $aid = $id;
        $data = [];
        $admin = DB::table('zcfy_admin')->where('id',$aid)->get();
        $data['admin'] = (array)$admin[0];
        return view('zcfy_admin_update',$data);
    }

    //do管理员编辑
    public function admin_doUpdate($id){
        $aname = $_POST['uname'];
        $apwd = $_POST["apwd"];
        $reapwd = $_POST["reapwd"];
        if($apwd == '' || $reapwd == ''){
            echo "<script>alert('密码不能为空')</script>";
            return self::admin_update($id);
        }else if($apwd != $reapwd){
            echo "<script>alert('两次密码输入不一致')</script>";
            return self::admin_update($id);
        }
        $admin = DB::table('zcfy_admin')->where(['id'=>$id])->get();
        $apwd =md5($apwd);
        if($apwd == $admin[0]->password){
            echo "<script>alert('与原密码一致,无需修改')</script>";
            return self::admin_update($id);
        }
        $num = DB::table('zcfy_admin')->where('id',$id)->update(
                ['username'=>$aname,
                 'password'=>$apwd]
            );
        if($num == 1){
            echo "<script>alert('管理员基本信息修改成功')</script>";
            return self::admin();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::admin_update($id);
        }
    }

    //管理后台主页
    public function index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $data = [];
        $info = Zcfy::orderBy('id','asc')->paginate(50);
        return view('zcfy_info',[
                'info'=>$info,
            ]);
    }

    public function index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('zcfy_fixed_assets_official')->where('id',$id)->delete();
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

    public function index_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        return view('zcfy_index_insert');
    }

    public function index_asset(){
        $asset_tag = $_POST['asset_tag'];
        $phone_info = DB::table('zcfy_fixed_assets_official')->where('asset_tag',$asset_tag)->get();
        if($phone_info){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }
    }

    public function index_doInsert(){
        $asset_tag = $_POST['asset_tag'];
        $category = $_POST['category'];
        $asset_name = $_POST['asset_name'];
        $unit = $_POST['unit'];
        $model = $_POST['model'];
        $place = $_POST['place'];
        $status = $_POST['status'];
        $picture = $_POST['picture'];
        $remark = $_POST['remark'];
        $qr_code = $_POST['qr_code'];
        $asset = DB::table('zcfy_fixed_assets_official')->where(['asset_tag'=>$asset_tag])->get();
        if($asset){
            echo "<script>alert('固资编号重复,请重新输入')</script>";
            return self::index_insert();
        }
        if($asset_tag == ''){
            echo "<script>alert('固资编号不能为空')</script>";
            return self::index_insert();
        }else if($category == ''){
            echo "<script>alert('固资类别不能为空')</script>";
            return self::index_insert();
        }else if($asset_name == ''){
            echo "<script>alert('固资名称不能为空')</script>";
            return self::index_insert();
        }
        $bool = DB::table('zcfy_fixed_assets_official')->insert(
            ['asset_tag'=>$asset_tag,'category'=>$category,
            'asset_name'=>$asset_name,'unit'=>$unit,
            'model'=>$model,'place'=>$place,
            'status'=>$status,'picture'=>$picture,
            'remark'=>$remark,'qr_code'=>$qr_code]
            );
        if($bool){
            return redirect('/zcfy/index');
        }else{
            return redirect()->back();
        }
    }

    public function index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $data = [];
        $info = DB::table('zcfy_fixed_assets_official')->where('id',$id)->get();
        $data['info'] = (array)$info[0];
        return view('zcfy_index_update',$data);
    }

    public function index_doUpdate($id){
        $asset_tag = $_POST['asset_tag'];
        $category = $_POST['category'];
        $asset_name = $_POST['asset_name'];
        $unit = $_POST['unit'];
        $model = $_POST['model'];
        $place = $_POST['place'];
        $status = $_POST['status'];
        $picture = $_POST['picture'];
        $remark = $_POST['remark'];
        $qr_code = $_POST['qr_code'];
        if($category == ''){
            echo "<script>alert('固资类别不能为空')</script>";
            return self::index_update($id);
        }else if($asset_name == ''){
            echo "<script>alert('固资名称不能为空')</script>";
            return self::index_update($id);
        }
        $num = DB::table('zcfy_fixed_assets_official')->where('id',$id)->update(
            ['asset_tag'=>$asset_tag,'category'=>$category,
            'asset_name'=>$asset_name,'unit'=>$unit,
            'model'=>$model,'place'=>$place,
            'status'=>$status,'picture'=>$picture,
            'remark'=>$remark,'qr_code'=>$qr_code]
            );
        if($num == 1){
            return redirect('/zcfy/index');
        }else{
            return redirect()->back();
        }
    }

    public function search(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $data = [];
        return view('zcfy_search');
    }

    public function index_search(){
        $info = $_POST['info'];
        $info_details = DB::table('zcfy_fixed_assets_official')
                    ->where('asset_tag','like','%'.$info.'%')
                    ->orWhere('category','like','%'.$info.'%')
                    ->orWhere('asset_name','like','%'.$info.'%')
                    ->orWhere('unit','like','%'.$info.'%')
                    ->orWhere('model','like','%'.$info.'%')
                    ->orWhere('place','like','%'.$info.'%')
                    ->orWhere('status','like','%'.$info.'%')
                    ->orWhere('remark','like','%'.$info.'%')
                    ->get();
        if($info_details){
            return new JsonResponse(
                    array('msg' => 'ok','info_details' =>$info_details)
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function database(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        return view('zcfy_database');
    }

    public function database_truncate(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        DB::table('zcfy_fixed_assets_actual')->truncate();
        return redirect('/zcfy/database');
    }

    public function excel1($file_name = '固资登记表',$sheet_name='固资登记表'){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $data = $info_details = DB::table('zcfy_fixed_assets_official')->get();
        $d =[];
        foreach ($data as $k=>$v) {
           $m = [];
           foreach ($v as $i=>$j) {
               $m[$i] = $j;
           }
           $d[$k] = $m;
       }
       //将对象转换为excel工具需要的二维数组
       $d = array_map('get_object_vars', $data);
       //在$d数组中加入表头中文备注
       // array_unshift($d,['id'=>'序号',
       //                   'asset_tag'=>'资产编号',
       //                   'category'=>'类别',
       //                   'asset_name'=>'资产名称',
       //                   'unit'=>'单位',
       //                   'model'=>'规格型号',
       //                   'place'=>'存放地点',
       //                   'status'=>'状态',
       //                   'picture'=>'固资图片',
       //                   'remark'=>'备注',
       //                   'qr_code'=>'二维码',
       //                 ]);
       Excel::create($file_name, function ($excel) use ($d, $sheet_name) {
            $excel->sheet($sheet_name, function ($sheet) use ($d) {
                $sheet->fromModel($d)
                    ->freezeFirstRow(); #冻结第一行
            });
        })->export('xlsx');
    }

    public function excel2($file_name = '固资盘点清单',$sheet_name='固资盘点清单'){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $data = $info_details = DB::table('zcfy_fixed_assets_actual')->get();
        $d =[];
        foreach ($data as $k=>$v) {
           $m = [];
           foreach ($v as $i=>$j) {
               $m[$i] = $j;
           }
           $d[$k] = $m;
        }
        //将对象转换为excel工具需要的二维数组
        $d = array_map('get_object_vars', $data);
        //在$d数组中加入表头中文备注
        // array_unshift($d,['id'=>'序号',
        //                   'asset_tag'=>'资产编号',
        //                   'category'=>'类别',
        //                   'asset_name'=>'资产名称',
        //                   'unit'=>'单位',
        //                   'model'=>'规格型号',
        //                   'place'=>'存放地点',
        //                   'status'=>'状态',
        //                   'picture'=>'固资图片',
        //                   'remark'=>'备注',
        //                   'qr_code'=>'二维码',
        //                 ]);
        Excel::create($file_name, function ($excel) use ($d, $sheet_name) {
            $excel->sheet($sheet_name, function ($sheet) use ($d) {
                $sheet->fromModel($d)
                    ->freezeFirstRow(); #冻结第一行
            });
        })->export('xlsx');
    }

    //七牛云文件上传
    public function zcfy_upload(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $storage = \Storage::disk(config('admin.upload.disk'));
        $uploadToken = $storage->uploadToken();
        $data['uptoken'] = $uploadToken;
        return view('upload', $data);
    }

    //生成二维码
    public function zcfy_qrcode(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/zcfy/login');
        }
        $data = [];
        return view('zcfy_qrcode');
    }


}
