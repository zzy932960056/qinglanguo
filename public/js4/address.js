/***
 * @auth topoadmin
 * @description 中国省市信息联动插件
 * @time 2016-09-25 20:42:54
 * options 参数说明
 * ------------------
 * @param title				String		头部提示
 * @param prov				String 		默认省份
 * @param city				String 		默认城市
 * @param district			String 		默认区/县
 * @param selectNumber		Int			设置省市县可选择个数 1-2,默认为3个都可选
 * @param scrollToCenter	Boolean 	true:已选位置滚动到中央 ,默认为顶部
 * @param autoOpen			Boolean 	自动打开
 * @param customOutput		Function	自定义选择完毕输出，不执行内部填充函数
 * @param selectEnd			Function 	选择完毕回调事件 return {prov,city,district},address
 * ------------------
 * @version 1.0.0
 */
(function(factory) {
	'use strict';
	if(typeof define === 'function' && define.amd) {
		define(['jquery', 'amazeui'], factory);
	} else if(typeof exports !== 'undefined') {
		module.exports = factory(require('jquery'), require('amazeui'));
	} else {
		factory(jQuery, jQuery.AMUI);
	}

}(function($) {
	console.log("strict");
	"use strict";
	var addressJson = [
		{
			"id": 16,
			"name": "北京市",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 110100,
					"name": "北京市",
					"parent_id": 16,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 31,
			"name": "天津市",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 120100,
					"name": "天津市",
					"parent_id": 31,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 21,
			"name": "河北省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 130100,
					"name": "石家庄市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130200,
					"name": "唐山市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130300,
					"name": "秦皇岛市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130400,
					"name": "邯郸市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130500,
					"name": "邢台市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130600,
					"name": "保定市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130700,
					"name": "张家口市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130800,
					"name": "承德市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 130900,
					"name": "沧州市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 131000,
					"name": "廊坊市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 131100,
					"name": "衡水市",
					"parent_id": 21,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 27,
			"name": "山西省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 140100,
					"name": "太原市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140200,
					"name": "大同市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140300,
					"name": "阳泉市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140400,
					"name": "长治市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140500,
					"name": "晋城市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140600,
					"name": "朔州市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140700,
					"name": "晋中市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140800,
					"name": "运城市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 140900,
					"name": "忻州市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 141000,
					"name": "临汾市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 141100,
					"name": "吕梁市",
					"parent_id": 27,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 5,
			"name": "内蒙古自治区",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 150100,
					"name": "呼和浩特市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150200,
					"name": "包头市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150300,
					"name": "乌海市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150400,
					"name": "赤峰市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150500,
					"name": "通辽市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150600,
					"name": "鄂尔多斯市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150700,
					"name": "呼伦贝尔市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150800,
					"name": "巴彦淖尔市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 150900,
					"name": "乌兰察布市",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 152200,
					"name": "兴安盟",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 152500,
					"name": "锡林郭勒盟",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 152900,
					"name": "阿拉善盟",
					"parent_id": 5,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 4,
			"name": "辽宁省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 210100,
					"name": "沈阳市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210200,
					"name": "大连市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210300,
					"name": "鞍山市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210400,
					"name": "抚顺市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210500,
					"name": "本溪市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210600,
					"name": "丹东市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210700,
					"name": "锦州市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210800,
					"name": "营口市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 210900,
					"name": "阜新市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 211000,
					"name": "辽阳市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 211100,
					"name": "盘锦市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 211200,
					"name": "铁岭市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 211300,
					"name": "朝阳市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 211400,
					"name": "葫芦岛市",
					"parent_id": 4,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 3,
			"name": "吉林省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 220100,
					"name": "长春市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220200,
					"name": "吉林市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220300,
					"name": "四平市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220400,
					"name": "辽源市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220500,
					"name": "通化市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220600,
					"name": "白山市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220700,
					"name": "松原市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 220800,
					"name": "白城市",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 222400,
					"name": "延边朝鲜族自治州",
					"parent_id": 3,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 2,
			"name": "黑龙江省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 230100,
					"name": "哈尔滨市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230200,
					"name": "齐齐哈尔市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230300,
					"name": "鸡西市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230400,
					"name": "鹤岗市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230500,
					"name": "双鸭山市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230600,
					"name": "大庆市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230700,
					"name": "伊春市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230800,
					"name": "佳木斯市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 230900,
					"name": "七台河市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 231000,
					"name": "牡丹江市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 231100,
					"name": "黑河市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 231200,
					"name": "绥化市",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 232700,
					"name": "大兴安岭地区",
					"parent_id": 2,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 30,
			"name": "上海市",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 310100,
					"name": "上海市",
					"parent_id": 30,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 24,
			"name": "江苏省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 320100,
					"name": "南京市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320200,
					"name": "无锡市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320300,
					"name": "徐州市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320400,
					"name": "常州市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320500,
					"name": "苏州市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320600,
					"name": "南通市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320700,
					"name": "连云港市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320800,
					"name": "淮安市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 320900,
					"name": "盐城市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 321000,
					"name": "扬州市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 321100,
					"name": "镇江市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 321200,
					"name": "泰州市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 321300,
					"name": "宿迁市",
					"parent_id": 24,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 28,
			"name": "浙江省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 330100,
					"name": "杭州市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330200,
					"name": "宁波市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330300,
					"name": "温州市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330400,
					"name": "嘉兴市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330500,
					"name": "湖州市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330600,
					"name": "绍兴市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330700,
					"name": "金华市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330800,
					"name": "衢州市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 330900,
					"name": "舟山市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 331000,
					"name": "台州市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 331100,
					"name": "丽水市",
					"parent_id": 28,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 15,
			"name": "安徽省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 340100,
					"name": "合肥市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340200,
					"name": "芜湖市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340300,
					"name": "蚌埠市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340400,
					"name": "淮南市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340500,
					"name": "马鞍山市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340600,
					"name": "淮北市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340700,
					"name": "铜陵市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 340800,
					"name": "安庆市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341000,
					"name": "黄山市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341100,
					"name": "滁州市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341200,
					"name": "阜阳市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341300,
					"name": "宿州市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341400,
					"name": "巢湖市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341500,
					"name": "六安市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341600,
					"name": "亳州市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341700,
					"name": "池州市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 341800,
					"name": "宣城市",
					"parent_id": 15,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 18,
			"name": "福建省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 350100,
					"name": "福州市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350200,
					"name": "厦门市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350300,
					"name": "莆田市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350400,
					"name": "三明市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350500,
					"name": "泉州市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350600,
					"name": "漳州市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350700,
					"name": "南平市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350800,
					"name": "龙岩市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 350900,
					"name": "宁德市",
					"parent_id": 18,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 25,
			"name": "江西省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 360100,
					"name": "南昌市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360200,
					"name": "景德镇市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360300,
					"name": "萍乡市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360400,
					"name": "九江市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360500,
					"name": "新余市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360600,
					"name": "鹰潭市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360700,
					"name": "赣州市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360800,
					"name": "吉安市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 360900,
					"name": "宜春市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 361000,
					"name": "抚州市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 361100,
					"name": "上饶市",
					"parent_id": 25,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 14,
			"name": "山东省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 370100,
					"name": "济南市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370200,
					"name": "青岛市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370300,
					"name": "淄博市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370400,
					"name": "枣庄市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370500,
					"name": "东营市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370600,
					"name": "烟台市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370700,
					"name": "潍坊市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370800,
					"name": "济宁市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 370900,
					"name": "泰安市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371000,
					"name": "威海市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371100,
					"name": "日照市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371200,
					"name": "莱芜市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371300,
					"name": "临沂市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371400,
					"name": "德州市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371500,
					"name": "聊城市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371600,
					"name": "滨州市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 371700,
					"name": "菏泽市",
					"parent_id": 14,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 22,
			"name": "河南省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 410100,
					"name": "郑州市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410200,
					"name": "开封市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410300,
					"name": "洛阳市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410400,
					"name": "平顶山市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410500,
					"name": "安阳市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410600,
					"name": "鹤壁市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410700,
					"name": "新乡市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410800,
					"name": "焦作市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 410900,
					"name": "濮阳市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411000,
					"name": "许昌市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411100,
					"name": "漯河市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411200,
					"name": "三门峡市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411300,
					"name": "南阳市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411400,
					"name": "商丘市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411500,
					"name": "信阳市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411600,
					"name": "周口市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 411700,
					"name": "驻马店市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 419001,
					"name": "济源市",
					"parent_id": 22,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 13,
			"name": "湖北省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 420100,
					"name": "武汉市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420200,
					"name": "黄石市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420300,
					"name": "十堰市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420500,
					"name": "宜昌市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420600,
					"name": "襄阳市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420700,
					"name": "鄂州市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420800,
					"name": "荆门市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 420900,
					"name": "孝感市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 421000,
					"name": "荆州市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 421100,
					"name": "黄冈市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 421200,
					"name": "咸宁市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 421300,
					"name": "随州市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 422800,
					"name": "恩施土家族苗族自治州",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 429004,
					"name": "仙桃市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 429005,
					"name": "潜江市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 429006,
					"name": "天门市",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 429021,
					"name": "神农架林区",
					"parent_id": 13,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 23,
			"name": "湖南省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 430100,
					"name": "长沙市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430200,
					"name": "株洲市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430300,
					"name": "湘潭市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430400,
					"name": "衡阳市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430500,
					"name": "邵阳市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430600,
					"name": "岳阳市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430700,
					"name": "常德市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430800,
					"name": "张家界市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 430900,
					"name": "益阳市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 431000,
					"name": "郴州市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 431100,
					"name": "永州市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 431200,
					"name": "怀化市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 431300,
					"name": "娄底市",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 433100,
					"name": "湘西土家族苗族自治州",
					"parent_id": 23,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 11,
			"name": "广东省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 440100,
					"name": "广州市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440200,
					"name": "韶关市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440300,
					"name": "深圳市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440400,
					"name": "珠海市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440500,
					"name": "汕头市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440600,
					"name": "佛山市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440700,
					"name": "江门市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440800,
					"name": "湛江市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 440900,
					"name": "茂名市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441200,
					"name": "肇庆市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441300,
					"name": "惠州市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441400,
					"name": "梅州市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441500,
					"name": "汕尾市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441600,
					"name": "河源市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441700,
					"name": "阳江市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441800,
					"name": "清远市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 441900,
					"name": "东莞市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 442000,
					"name": "中山市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 445100,
					"name": "潮州市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 445200,
					"name": "揭阳市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 445300,
					"name": "云浮市",
					"parent_id": 11,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 19,
			"name": "广西壮族自治区",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 450100,
					"name": "南宁市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450200,
					"name": "柳州市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450300,
					"name": "桂林市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450400,
					"name": "梧州市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450500,
					"name": "北海市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450600,
					"name": "防城港市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450700,
					"name": "钦州市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450800,
					"name": "贵港市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 450900,
					"name": "玉林市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 451000,
					"name": "百色市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 451100,
					"name": "贺州市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 451200,
					"name": "河池市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 451300,
					"name": "来宾市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 451400,
					"name": "崇左市",
					"parent_id": 19,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 12,
			"name": "海南省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 460100,
					"name": "海口市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 460200,
					"name": "三亚市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 460300,
					"name": "三沙市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469001,
					"name": "五指山市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469002,
					"name": "琼海市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469003,
					"name": "儋州市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469005,
					"name": "文昌市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469006,
					"name": "万宁市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469007,
					"name": "东方市",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469021,
					"name": "定安县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469022,
					"name": "屯昌县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469023,
					"name": "澄迈县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469024,
					"name": "临高县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469025,
					"name": "白沙黎族自治县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469026,
					"name": "昌江黎族自治县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469027,
					"name": "乐东黎族自治县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469028,
					"name": "陵水黎族自治县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469029,
					"name": "保亭黎族苗族自治县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 469030,
					"name": "琼中黎族苗族自治县",
					"parent_id": 12,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 17,
			"name": "重庆市",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 500100,
					"name": "重庆市",
					"parent_id": 17,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 7,
			"name": "四川省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 510100,
					"name": "成都市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510300,
					"name": "自贡市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510400,
					"name": "攀枝花市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510500,
					"name": "泸州市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510600,
					"name": "德阳市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510700,
					"name": "绵阳市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510800,
					"name": "广元市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 510900,
					"name": "遂宁市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511000,
					"name": "内江市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511100,
					"name": "乐山市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511300,
					"name": "南充市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511400,
					"name": "眉山市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511500,
					"name": "宜宾市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511600,
					"name": "广安市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511700,
					"name": "达州市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511800,
					"name": "雅安市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 511900,
					"name": "巴中市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 512000,
					"name": "资阳市",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 513200,
					"name": "阿坝藏族羌族自治州",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 513300,
					"name": "甘孜藏族自治州",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 513400,
					"name": "凉山彝族自治州",
					"parent_id": 7,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 20,
			"name": "贵州省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 520100,
					"name": "贵阳市",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 520200,
					"name": "六盘水市",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 520300,
					"name": "遵义市",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 520400,
					"name": "安顺市",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 520500,
					"name": "毕节市",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 520600,
					"name": "铜仁市",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 522300,
					"name": "黔西南布依族苗族自治州",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 522600,
					"name": "黔东南苗族侗族自治州",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 522700,
					"name": "黔南布依族苗族自治州",
					"parent_id": 20,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 10,
			"name": "云南省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 530100,
					"name": "昆明市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530300,
					"name": "曲靖市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530400,
					"name": "玉溪市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530500,
					"name": "保山市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530600,
					"name": "昭通市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530700,
					"name": "丽江市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530800,
					"name": "普洱市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 530900,
					"name": "临沧市",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 532300,
					"name": "楚雄彝族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 532500,
					"name": "红河哈尼族彝族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 532600,
					"name": "文山壮族苗族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 532800,
					"name": "西双版纳傣族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 532900,
					"name": "大理白族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 533100,
					"name": "德宏傣族景颇族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 533300,
					"name": "怒江傈僳族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 533400,
					"name": "迪庆藏族自治州",
					"parent_id": 10,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 9,
			"name": "西藏自治区",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 540100,
					"name": "拉萨市",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 540200,
					"name": "日喀则市",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 542100,
					"name": "昌都地区",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 542200,
					"name": "山南地区",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 542400,
					"name": "那曲地区",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 542500,
					"name": "阿里地区",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 542600,
					"name": "林芝地区",
					"parent_id": 9,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 26,
			"name": "陕西省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 610100,
					"name": "西安市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610200,
					"name": "铜川市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610300,
					"name": "宝鸡市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610400,
					"name": "咸阳市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610500,
					"name": "渭南市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610600,
					"name": "延安市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610700,
					"name": "汉中市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610800,
					"name": "榆林市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 610900,
					"name": "安康市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 611000,
					"name": "商洛市",
					"parent_id": 26,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 1,
			"name": "甘肃省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 620100,
					"name": "兰州市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620200,
					"name": "嘉峪关市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620300,
					"name": "金昌市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620400,
					"name": "白银市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620500,
					"name": "天水市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620600,
					"name": "武威市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620700,
					"name": "张掖市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620800,
					"name": "平凉市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 620900,
					"name": "酒泉市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 621000,
					"name": "庆阳市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 621100,
					"name": "定西市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 621200,
					"name": "陇南市",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 622900,
					"name": "临夏回族自治州",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 623000,
					"name": "甘南藏族自治州",
					"parent_id": 1,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 6,
			"name": "青海省",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 630100,
					"name": "西宁市",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 630200,
					"name": "海东市",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 632200,
					"name": "海北藏族自治州",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 632300,
					"name": "黄南藏族自治州",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 632500,
					"name": "海南藏族自治州",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 632600,
					"name": "果洛藏族自治州",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 632700,
					"name": "玉树藏族自治州",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 632800,
					"name": "海西蒙古族藏族自治州",
					"parent_id": 6,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 29,
			"name": "宁夏回族自治区",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 640100,
					"name": "银川市",
					"parent_id": 29,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 640200,
					"name": "石嘴山市",
					"parent_id": 29,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 640300,
					"name": "吴忠市",
					"parent_id": 29,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 640400,
					"name": "固原市",
					"parent_id": 29,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 640500,
					"name": "中卫市",
					"parent_id": 29,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		},
		{
			"id": 8,
			"name": "新疆维吾尔自治区",
			"parent_id": 1,
			"type": 2,
			"zip": "",
			"city": [
				{
					"id": 650100,
					"name": "乌鲁木齐市",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 650200,
					"name": "克拉玛依市",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 652100,
					"name": "吐鲁番地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 652200,
					"name": "哈密地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 652300,
					"name": "昌吉回族自治州",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 652700,
					"name": "博尔塔拉蒙古自治州",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 652800,
					"name": "巴音郭楞蒙古自治州",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 652900,
					"name": "阿克苏地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 653000,
					"name": "克孜勒苏柯尔克孜自治州",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 653100,
					"name": "喀什地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 653200,
					"name": "和田地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 654000,
					"name": "伊犁哈萨克自治州",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 654200,
					"name": "塔城地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 654300,
					"name": "阿勒泰地区",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 659001,
					"name": "石河子市",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 659002,
					"name": "阿拉尔市",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 659003,
					"name": "图木舒克市",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				},
				{
					"id": 659004,
					"name": "五家渠市",
					"parent_id": 8,
					"type": 3,
					"zip": "",
					"district": []
				}
			]
		}
	]

	var iScroll;
	if(typeof(IScroll) == "undefined") { // 检测 iScroll 是否存在
		iScroll = $.AMUI.iScroll;
	} else {
		iScroll = IScroll;
	}

	// 构造函数
	function address(elm, options) {
		var self = this;
		self.$element = elm;
		self.options = options;

		// 初始化
		self._ready();

		// 带底部参数
		if(self.options.footer) {
			var $cancelBtn = self.$popup.find('.am-address-cancel');
			var $confirmBtn = self.$popup.find('.am-address-confirm');
			$confirmBtn.on('click', function() {
				self._selectEnd();
				return false;
			});
			$cancelBtn.on('click', function() {
				self.$popup.modal("close");
				return false;
			});
		}

		// 窗口被打开
		self.$popup.on('open.modal.amui', function() {
			self._readyProv();
		});

		// 窗口关闭
		self.$popup.on('close.modal.amui', function() {
			var selectProv = self.$prov.find("li.am-active").text();
			if(selectProv != self.options.prov) {
				self.$prov.find("li:contains(" + self.options.prov + ")").addClass("am-active").siblings().removeClass("am-active");
			}
		});

		// 是否自动打开
		if(self.options.autoOpen) {
			self.$popup.modal("open");
		}

		self.$element.on("click", function() {
			self.$popup.modal("open");
		});

		// 给 element 对象绑定选择窗口的id
		self.$element.data("address-popup", self.$popup.attr("id"));
	}

	// 渲染选项列表
	address._readyList = function(json, selectedAddress) {
		var index = 0;
		var html = [];
		$.each(json, function(i, v) {
			// 循环第一个值时，如果没有默认选择值就添加 active
			if(i == 0 && !selectedAddress) {
				html.push('<li class="am-active">' + v.name + '</li>');
				index = i;
				return;
			}
			if(selectedAddress && v.name === selectedAddress) {
				html.push('<li class="am-active">' + v.name + '</li>');
				index = i;
			} else {
				html.push('<li>' + v.name + '</li>');
			}
		});
		return {
			list: html.join(''),
			index: index
		};
	}

	// 渲染选择窗口
	address.prototype._ready = function() {
		var self = this;
		var html = [];
		html.push('<div class="am-popup am-address-popup" id="' + Math.ceil(Math.random() * (new Date).getTime()) + '">');
		html.push('<div class="am-popup-inner">');
		html.push('<div class="am-popup-hd">');
		html.push('<h4 class="am-popup-title">' + self.options.title + '</h4>');
		html.push('<span data-am-modal-close class="am-close">&times;</span>');
		html.push('</div>');
		html.push('<div class="am-popup-bd">');
		if(self.options.footer) {
			html.push('<div class="am-address-list am-address-list-footer">');
		} else {
			html.push('<div class="am-address-list">');
		}
		html.push('<div class="am-u-sm-4 am-address-prov"><ul class="am-list am-list-static"></div>');
		html.push('<div class="am-u-sm-4 am-address-city"><ul class="am-list am-list-static"></div>');
		html.push('<div class="am-u-sm-4 am-address-district"><ul class="am-list am-list-static"></div>');
		html.push('</div>');

		if(self.options.footer) {
			html.push('<div class="am-modal-footer am-address-footer">');
			html.push('<span class="am-modal-btn am-address-cancel">取消</span>');
			html.push('<span class="am-modal-btn am-address-confirm">确定</span>');
			html.push('</div>');
		}
		html.push('</div>');
		html.push('</div>');
		html.push('</div>');
		self.$popup = $(html.join('')).appendTo('body');

		self.$prov = self.$popup.find('div.am-address-prov');
		self.$city = self.$popup.find('div.am-address-city');
		self.$district = self.$popup.find('div.am-address-district');

		// 初始化数据
		self._readyProv("create");

		// 判断是否需要添加市级或县级栏
		if(self.options.selectNumber == 1) {
			self.$popup.find("div.am-address-list>div").removeClass("am-u-sm-4").addClass("am-u-sm-12");
		} else {
			self._readyCity("create");
		}
		if(self.options.selectNumber == 2) {
			self.$popup.find("div.am-address-list>div").removeClass("am-u-sm-4").addClass("am-u-sm-6");
		} else {
			self._readyDistrict("create");
		}
	}

	// 函数 _readyxxx 的参数 methods="create" 表示新建 否则负责刷新 IScroll
	// {渲染,刷新} 省级数据
	address.prototype._readyProv = function(methods) {
		var self = this;
		if(methods == "create") {
			var prov = address._readyList(addressJson, self.options.prov);
			self.$prov.children("ul").html(prov.list).data("address-active", prov.index);
			if(!prov.index) {
				self.$prov.find("li:eq(0)").addClass("am-active").siblings("li").removeClass("am-active");
			}

			self.provIscroll = new iScroll(self.$prov[0], {
				tap: "addressTap",
				mouseWheel: true
			});

			// 点击事件
			self.$prov.on("addressTap", "li", function() {
				var $this = $(this);
				if($this.hasClass("am-active")) {
					return false;
				}
				$this.addClass("am-active").siblings("li").removeClass("am-active");
				if(self.options.selectNumber != 1) {
					self._readyCity(null, "tap");
				} else {
					self._selectEnd();
				}
				self.$element.trigger("provTap", [$this]);
			});
		} else {
			if(self.options.selectNumber != 1) {
				self._readyCity();
			}
			self.provIscroll.refresh();
			self.provIscroll.scrollToElement(self.$prov.find("li.am-active")[0], null, null, self.options.scrollToCenter);
		}
		console.log("111111111111");
	}

	// {渲染,刷新} 市级数据
	address.prototype._readyCity = function(methods, onEvent) {
		var self = this;
		if(methods == "create") {
			self.cityIscroll = new iScroll(self.$city[0], {
				tap: "addressTap",
				mouseWheel: true
			});
			self.$city.on("addressTap", "li", function() {
				var $this = $(this);
				if($this.hasClass("am-active")) {
					return false;
				}
				$this.addClass("am-active").siblings("li").removeClass("am-active");
				if(self.options.selectNumber != 2) {
					self._readyDistrict(null, "tap");
				} else {
					self._selectEnd();
				}
				self.$element.trigger("cityTap", [$this]);
			});
		} else {
			var provIndex = self.$prov.find(".am-active").index();
			var city = address._readyList(addressJson[provIndex].city, self.options.city);
			self.$city.children("ul").html(city.list).data("address-active", city.index);
			if(!city.index) { // 没有默认选中项
				self.$city.find("li:eq(0)").addClass("am-active").siblings("li").removeClass("am-active");
			}
			// 触发省级 tap 事件时，如果市级只要一个并且是省市级联时，触发选择完毕函数
			if(onEvent === "tap" && addressJson[provIndex].city.length <= 1 && self.options.selectNumber == 2) {
				self._selectEnd();
			}

			self.cityIscroll.refresh();
			self.cityIscroll.scrollToElement(self.$city.find("li.am-active")[0], null, null, self.options.scrollToCenter);

			if(self.options.selectNumber != 2) {
				self._readyDistrict();
			}
		}
	}

	// {渲染,刷新} 县级 数据
	address.prototype._readyDistrict = function(methods, onEvent) {
		var self = this;
		if(methods == "create") {
			self.districtIscroll = new iScroll(self.$district[0], {
				tap: "addressTap",
				mouseWheel: true
			});

			// 点击事件
			self.$district.on("addressTap", "li", function() {
				var $this = $(this);
				$this.addClass("am-active").siblings("li").removeClass("am-active");
				self._selectEnd();
			});
		} else {
			var provIndex = self.$prov.find(".am-active").index();
			var cityIndex = self.$city.find(".am-active").index();
			var districtJson = addressJson[provIndex].city[cityIndex].district;
			if(districtJson.length <= 0) { // 如果县级数据不存在，设置为空
				self.$district.children("ul").html("");
				if(onEvent == "tap") {
					self._selectEnd();
				}
				return;
			}

			var district = address._readyList(districtJson, self.options.district);

			self.$district.children("ul").html(district.list).data("address-active", district.index);
			if(!district.index) {
				self.$district.find("li:eq(0)").addClass("am-active").siblings("li").removeClass("am-active");
			}
			self.districtIscroll.refresh();
			self.districtIscroll.scrollToElement(self.$district.find("li.am-active")[0], null, null, self.options.scrollToCenter);
		}
	}

	// 选择完毕
	address.prototype._selectEnd = function() {
		var self = this;
		// 获取已选省级数据
		var provIndex = self.$prov.find("li.am-active").index();
		var provJson = addressJson[provIndex];

		var sJson = {
			prov: provJson.name,
			city: "",
			cityId:"",
			district: "",
		}

		if(self.options.selectNumber != 1) { // selectNumber = 1 表示只选省级
			var cityIndex = self.$city.find("li.am-active").index();
			var cityJson = addressJson[provIndex].city[cityIndex];
			sJson.city = cityJson.name;
			sJson.cityId = cityJson.id;
			// 判断是否有 县区 级数据
			if(cityJson.district.length && self.options.selectNumber != 2) { // selectNumber = 2 表示只选省市级
				var districtIndex = self.$district.find("li.am-active").index();
				var districtJson = addressJson[provIndex].city[cityIndex].district[districtIndex];
				sJson.district = districtJson.name;
			}
		}
		console.log(sJson);
		self.options = $.extend(true, self.options, sJson); // 合并参数,下次打开选择窗口时，需读取 options 数据进行定位

		// 自动填充
		if(!self.options.customOutput) {
			console.log(sJson);
			self.$element.find("input").val(sJson.prov + sJson.city + sJson.district);
		}

		// 选取完毕回调
		if($.isFunction(self.options.selectEnd)) {
			console.log(sJson);
			self.options.selectEnd(sJson, self);
		}
		this.$popup.modal("close");
	}

	$.fn.address = function(options) {
		var opt = $.extend(true, {
			title: "请选择地址",
			prov: "北京",
			city: "北京市",
			district: "东城区",
			selectNumber: 0,
			scrollToCenter: false,
			autoOpen: false,
			customOutput: false,
			selectEnd: false,
		}, options);
		new address(this, opt);
		return this;
	}

	$.AMUI.ready(function(doc) {
		$('[data-am-address]', doc).each(function() {
			var $this = $(this);
			var options = $.AMUI.utils.parseOptions($this.attr('data-am-address') || $this.data("am-address"));
			$this.address(options);
		});
	});

	return $;
}));