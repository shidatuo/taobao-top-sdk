<?php

namespace TOP\request;

/**
 * TOP API: taobao.unidesk.ad.adgroup.update request
 *
 * @author auto create
 * @since 1.0, 2022.08.31
 */
class UnideskAdAdgroupUpdateRequest
{
	/**
	 * 入参
	 **/
	private $adgroupTopDto;

	private $apiParas = array();

	public function setAdgroupTopDto($adgroupTopDto)
	{
		$this->adgroupTopDto = $adgroupTopDto;
		$this->apiParas["adgroup_top_dto"] = $adgroupTopDto;
	}

	public function getAdgroupTopDto()
	{
		return $this->adgroupTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.ad.adgroup.update";
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
