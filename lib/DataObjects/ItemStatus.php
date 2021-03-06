<?php
namespace PromisePay\DataObjects;
/**
 * Class ItemStatus
 * @package PromisePay\DataObjects
 */
class ItemStatus
{
    /**
     * @var
     */
    private $_id;
    /**
     * @var
     */
    private $_status;
    /**
     * @var
     */
    private $_state;

    public function __construct($jsonData = array())
    {
        if(count($jsonData)>0)
        {
            $this->_id     = array_key_exists('id', $jsonData)?$jsonData['id']:'';
            $this->_status = array_key_exists('status', $jsonData)?$jsonData['status']:'';
            $this->_state  = array_key_exists('state', $jsonData)?$jsonData['state']:'';
        }
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }

}