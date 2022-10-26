<?php

/**
 * 定向
 * @author auto create
 */
class AdgroupTargetTopDTO
{
	
	/** 
	 * 年龄
	 **/
	public $age;
	
	/** 
	 * 地域定向
	 **/
	public $area;
	
	/** 
	 * 智能放量，1：年龄，2：性别，3：地域，4：行为兴趣，5：学历
	 **/
	public $auto_extend_targets;
	
	/** 
	 * 职业，1：大学生，2：教师，3：IT，4：公务员，5：金融，6：医务人员
	 **/
	public $career;
	
	/** 
	 * 设备-品牌/价格
	 **/
	public $device;
	
	/** 
	 * 性别，-1：不限，1：女，2：男
	 **/
	public $gender;
	
	/** 
	 * 过滤已转化用户，0(默认)：不限；1：广告组2：广告计划；3：本账户；4：公司主体；5：APP
	 **/
	public $hide_if_converted;
	
	/** 
	 * 行为兴趣
	 **/
	public $interest_action;
	
	/** 
	 * 网络运营商，-1：不限，1：移动，2：联通，3：电信
	 **/
	public $net_carrier;
	
	/** 
	 * 网络，-1：不限，0：Wi-Fi，1：移动网络，2：2G，3：3G，4：4G
	 **/
	public $network;
	
	/** 
	 * 平台
	 **/
	public $platform;
	
	/** 
	 * 头条特有定向
	 **/
	public $toutiao;	
}
?>