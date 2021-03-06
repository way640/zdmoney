<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use Illuminate\Http\Request;
use DB;

/*
*@Class_name : 主页 （展示数据）
*@Use : 用户对基金的购入等操作
*@Author : (负责人)
*@Time : (完成时间)
*/
class IndexController extends CommonController
{
	//首页导航栏
	public function index(){
		//jsonp传值
		$code = $_GET['code'];
		$callback = $_GET['callback'];
		//查询 导航
		$info = DB::table('config')->where('config_type',1)->get();
		//返回 数据
		return  "$callback(".$info.")";
	}

	//首页 锦囊
	public function silk(){
		//jsonp传值
		$code = $_GET['code'];
		$callback = $_GET['callback'];
		//查询 锦囊 
		$info = DB::table('article')->orderby('article_add_time',`desc`)->limit(4)->get();
		//返回 数据
		return  "$callback(".$info.")";
	}
	// 首页 友情链接 
	public function link(){
		//jsonp传值
		$code = $_GET['code'];
		$callback = $_GET['callback'];
		//查询 友情链接
		$info = DB::table('config')->where('config_type',2)->get();
		//返回 数据
		return  "$callback(".$info.")";
	}
	public function silkid(){
		$id = $_GET['id'];
		//查询文章详情
		$info = DB::table('article')->where('article_id',$id)->first();
		//print_r($info);
		return view('Home/Gold/article',['info'=>$info]);
	}
}