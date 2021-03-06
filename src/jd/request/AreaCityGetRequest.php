<?php

namespace Arthuryinzhen\JDLogistic\JD\Request;

class AreaCityGetRequest
{
	private $apiParas = [];
	private $parentId;

	public function getApiMethodName()
	{
		return "jingdong.area.city.get";
	}

	public function getApiParas()
	{
		return json_encode($this->apiParas);
	}

	public function check()
	{
	}

	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[$key] = $value;
		$this->$key           = $value;
	}


	public function setParentId($parentId)
	{
		$this->parentId              = $parentId;
		$this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

}





        
 

