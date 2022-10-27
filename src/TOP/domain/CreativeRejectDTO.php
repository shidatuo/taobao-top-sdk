<?php

namespace TOP\domain;

/**
 * 审核详细信息
 * @author auto create
 */
class CreativeRejectDTO
{

	/**
	 * 图片
	 **/
	public $images;

	/**
	 * 素材类型：0-创意 1-图片，2-标题，3-视频，4-副标题，5-头图，6-摘要，默认创意
	 **/
	public $material_type;

	/**
	 * 拒绝项
	 **/
	public $reject_item;

	/**
	 * 拒绝原因
	 **/
	public $reject_reason;

	/**
	 * 标题
	 **/
	public $title;

	/**
	 * 视频
	 **/
	public $videos;
}
?>
