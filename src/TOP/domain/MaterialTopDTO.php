<?php

namespace TOP\domain;

/**
 * 素材信息
 * @author auto create
 */
class MaterialTopDTO
{

	/**
	 * 广告主ID
	 **/
	public $advertiser_id;

	/**
	 * 视频时长，单位秒
	 **/
	public $duration;

	/**
	 * 创建时间
	 **/
	public $gmt_create;

	/**
	 * 图片或视频高度
	 **/
	public $height;

	/**
	 * 素材id
	 **/
	public $id;

	/**
	 * 素材名称
	 **/
	public $name;

	/**
	 * 文件大小，单位byte
	 **/
	public $size;

	/**
	 * 文件类型，1：图片，2：视频
	 **/
	public $type;

	/**
	 * 素材url
	 **/
	public $url;

	/**
	 * 图片或视频宽度
	 **/
	public $width;
}
?>
