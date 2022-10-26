<?php

/**
 * 投放周期
 * @author auto create
 */
class CastTimeTopDTO
{
	
	/** 
	 * 投放周期，结束时间
	 **/
	public $end_time;
	
	/** 
	 * 投放周期，开始时间
	 **/
	public $start_time;
	
	/** 
	 * 时段，24*7 位 0 或 1 组成的字符串，小时粒度； 从 周一 0 点开始到周日 24 点结束，0 不投放，1 投放; 禁止全部为 0，不传或者全部为 1，表示全时段投放
	 **/
	public $time_series;
	
	/** 
	 * 投放周期类型，1：从今天起长期投放，2：设置开始和结束日期
	 **/
	public $time_type;	
}
?>