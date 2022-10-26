<?php

/**
 * 创意内容
 * @author auto create
 */
class CreativeTopDTO
{
	
	/** 
	 * 行动号召文本
	 **/
	public $action_text;
	
	/** 
	 * 广告形式，1：竖版视频，2：横版视频，3：大图横图，5：小图，6：大图竖图
	 **/
	public $format;
	
	/** 
	 * 图片素材id列表(组图存在多个)
	 **/
	public $img_ids;
	
	/** 
	 * 创意标题
	 **/
	public $title;
	
	/** 
	 * 头条特有属性
	 **/
	public $toutiao;
	
	/** 
	 * 视频素材封面id
	 **/
	public $video_cover_img_id;
	
	/** 
	 * 视频素材id
	 **/
	public $video_id;
	
	/** 
	 * 视频素材ID列表
	 **/
	public $video_ids;	
}
?>