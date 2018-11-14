<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 The casbin Authors. All Rights Reserved.
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
// 
//      http://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Proto;

/**
 * The Casbin service definition.
 */
class CasbinClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Proto\NewEnforcerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NewEnforcer(\Proto\NewEnforcerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/NewEnforcer',
        $argument,
        ['\Proto\NewEnforcerReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\NewAdapterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NewAdapter(\Proto\NewAdapterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/NewAdapter',
        $argument,
        ['\Proto\NewAdapterReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EnforceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Enforce(\Proto\EnforceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/Enforce',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LoadPolicy(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/LoadPolicy',
        $argument,
        ['\Proto\EmptyReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SavePolicy(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/SavePolicy',
        $argument,
        ['\Proto\EmptyReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/AddPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddNamedPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/AddNamedPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemovePolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemovePolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveNamedPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveNamedPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveFilteredPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveFilteredPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveFilteredNamedPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveFilteredNamedPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetPolicy(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNamedPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetNamedPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFilteredPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetFilteredPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFilteredNamedPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetFilteredNamedPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/AddGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddNamedGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/AddNamedGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveNamedGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveNamedGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveFilteredGroupingPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveFilteredGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveFilteredNamedGroupingPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/RemoveFilteredNamedGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetGroupingPolicy(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetGroupingPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNamedGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetNamedGroupingPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFilteredGroupingPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetFilteredGroupingPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\FilteredPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFilteredNamedGroupingPolicy(\Proto\FilteredPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetFilteredNamedGroupingPolicy',
        $argument,
        ['\Proto\Array2DReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllSubjects(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllSubjects',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SimpleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllNamedSubjects(\Proto\SimpleGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllNamedSubjects',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllObjects(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllObjects',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SimpleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllNamedObjects(\Proto\SimpleGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllNamedObjects',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllActions(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllActions',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SimpleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllNamedActions(\Proto\SimpleGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllNamedActions',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\EmptyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllRoles(\Proto\EmptyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllRoles',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\SimpleGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAllNamedRoles(\Proto\SimpleGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/GetAllNamedRoles',
        $argument,
        ['\Proto\ArrayReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function HasPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/HasPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function HasNamedPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/HasNamedPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function HasGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/HasGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Proto\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function HasNamedGroupingPolicy(\Proto\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Casbin/HasNamedGroupingPolicy',
        $argument,
        ['\Proto\BoolReply', 'decode'],
        $metadata, $options);
    }

}
