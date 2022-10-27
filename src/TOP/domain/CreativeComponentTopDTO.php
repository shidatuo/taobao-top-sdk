<?php

namespace TOP\domain;

/**
 * 组件信息列表
 * @author auto create
 */
class CreativeComponentTopDTO
{

	/**
	 * 广告主id
	 **/
	public $advertiser_id;

	/**
	 * 组件名称
	 **/
	public $component_name;

	/**
	 * 组件类型， 1图片磁贴 3电商优惠券磁贴 4推广卡片
	 **/
	public $component_type;

	/**
	 * 创建时间
	 **/
	public $gmt_create;

	/**
	 * 组件ID
	 **/
	public $id;

	/**
	 * 审核状态，1审核通过 2审核中 3审核拒绝
	 **/
	public $status;

	/**
	 * 组件详细信息-电商优惠券磁贴
	 **/
	public $toutiao_coupon_magnet;

	/**
	 * 组件详细信息-图片磁贴
	 **/
	public $toutiao_image_magnet;

	/**
	 * 组件详细信息-推广卡片
	 **/
	public $toutiao_promotion_card;
}
?>
