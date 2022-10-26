<?php
/**
 * TOP API: taobao.unidesk.ad.campaign.get request
 * 
 * @author auto create
 * @since 1.0, 2022.08.31
 */
class UnideskAdCampaignGetRequest
{
	/** 
	 * 查询参数
	 **/
	private $campaignTopQueryDto;
	
	private $apiParas = array();
	
	public function setCampaignTopQueryDto($campaignTopQueryDto)
	{
		$this->campaignTopQueryDto = $campaignTopQueryDto;
		$this->apiParas["campaign_top_query_dto"] = $campaignTopQueryDto;
	}

	public function getCampaignTopQueryDto()
	{
		return $this->campaignTopQueryDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.ad.campaign.get";
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
