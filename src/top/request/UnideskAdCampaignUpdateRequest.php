<?php
/**
 * TOP API: taobao.unidesk.ad.campaign.update request
 * 
 * @author auto create
 * @since 1.0, 2022.08.31
 */
class UnideskAdCampaignUpdateRequest
{
	/** 
	 * 入参
	 **/
	private $campaignTopDto;
	
	private $apiParas = array();
	
	public function setCampaignTopDto($campaignTopDto)
	{
		$this->campaignTopDto = $campaignTopDto;
		$this->apiParas["campaign_top_dto"] = $campaignTopDto;
	}

	public function getCampaignTopDto()
	{
		return $this->campaignTopDto;
	}

	public function getApiMethodName()
	{
		return "taobao.unidesk.ad.campaign.update";
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
