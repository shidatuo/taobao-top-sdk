<?php

namespace TOP\request;

/**
 * TOP API: taobao.unidesk.rta.ad.adgroup.status.update request
 *
 * @author auto create
 * @since 1.0, 2022.09.25
 */
class UnideskRtaAdAdgroupStatusUpdateRequest
{
	/**
	 * 入参
	 **/
	private $adgroupBatchUpdateTopDto;

	private $apiParas = array();

	public function setAdgroupBatchUpdateTopDto($adgroupBatchUpdateTopDto)
	{
		$this->adgroupBatchUpdateTopDto = $adgroupBatchUpdateTopDto;
		$this->apiParas["adgroup_batch_update_top_dto"] = $adgroupBatchUpdateTopDto;
	}

	public function getAdgroupBatchUpdateTopDto()
	{
		return $this->adgroupBatchUpdateTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.rta.ad.adgroup.status.update";
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
