<?php

namespace TOP\request;

/**
 * TOP API: taobao.unidesk.ad.targeting.behaviorinterestcategory.get request
 *
 * @author auto create
 * @since 1.0, 2022.08.31
 */
class UnideskAdTargetingBehaviorinterestcategoryGetRequest
{
	/**
	 * 查询入参
	 **/
	private $adgroupCategoryQueryDto;

	private $apiParas = array();

	public function setAdgroupCategoryQueryDto($adgroupCategoryQueryDto)
	{
		$this->adgroupCategoryQueryDto = $adgroupCategoryQueryDto;
		$this->apiParas["adgroup_category_query_dto"] = $adgroupCategoryQueryDto;
	}

	public function getAdgroupCategoryQueryDto()
	{
		return $this->adgroupCategoryQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.ad.targeting.behaviorinterestcategory.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
