<?php

/**
 * 返回结果
 * @author auto create
 */
class CampaignTopDTO
{
	
	/** 
	 * 广告主id
	 **/
	public $advertiser_id;
	
	/** 
	 * 预算
	 **/
	public $budget;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 计划组id
	 **/
	public $id;
	
	/** 
	 * 计划组名称
	 **/
	public $name;
	
	/** 
	 * 操作状态，1-开启、0-关闭
	 **/
	public $opt_status;
	
	/** 
	 * 状态， -1：删除 0：暂停 1：启用 6：余额不足 9：计划超预算
	 **/
	public $status;
	
	/** 
	 * 头条特有参数
	 **/
	public $toutiao;
	
	/** 
	 * 计划组类型，1：应用推广 3：电商店铺推广 4：销售线索收集
	 **/
	public $type;	
}
?>