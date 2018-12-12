<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Smartag\Request\V20180313;

class GrantInstanceToCbnRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Smartag", "2018-03-13", "GrantInstanceToCbn", "smartag", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $cenUid;

	private  $cenInstanceId;

	private  $ownerAccount;

	private  $ccnInstanceId;

	private  $ownerId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getCenUid() {
		return $this->cenUid;
	}

	public function setCenUid($cenUid) {
		$this->cenUid = $cenUid;
		$this->queryParameters["CenUid"]=$cenUid;
	}

	public function getCenInstanceId() {
		return $this->cenInstanceId;
	}

	public function setCenInstanceId($cenInstanceId) {
		$this->cenInstanceId = $cenInstanceId;
		$this->queryParameters["CenInstanceId"]=$cenInstanceId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getCcnInstanceId() {
		return $this->ccnInstanceId;
	}

	public function setCcnInstanceId($ccnInstanceId) {
		$this->ccnInstanceId = $ccnInstanceId;
		$this->queryParameters["CcnInstanceId"]=$ccnInstanceId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}
	
}