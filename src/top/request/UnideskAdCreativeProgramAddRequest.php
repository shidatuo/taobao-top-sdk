<?php
/**
 * TOP API: taobao.unidesk.ad.creative.program.add request
 * 
 * @author auto create
 * @since 1.0, 2022.08.31
 */
class UnideskAdCreativeProgramAddRequest
{
	/** 
	 * 入参
	 **/
	private $creativeGroupTopDto;
	
	/** 
	 * 请求id，用于幂等唯一key，新建创意建议填写
	 **/
	private $requestId;
	
	private $apiParas = array();
	
	public function setCreativeGroupTopDto($creativeGroupTopDto)
	{
		$this->creativeGroupTopDto = $creativeGroupTopDto;
		$this->apiParas["creative_group_top_dto"] = $creativeGroupTopDto;
	}

	public function getCreativeGroupTopDto()
	{
		return $this->creativeGroupTopDto;
	}

	public function setRequestId($requestId)
	{
		$this->requestId = $requestId;
		$this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.ad.creative.program.add";
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