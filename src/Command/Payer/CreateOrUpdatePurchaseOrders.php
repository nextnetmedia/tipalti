<?php

namespace Nextnetmedia\Tipalti\Command\Payer;

use Nextnetmedia\Tipalti\Resource\ArrayOfTipaltiPurchaseOrderItem;

class CreateOrUpdatePurchaseOrders
{
    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var float $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var ArrayOfTipaltiPurchaseOrderItem $purchaseOrders
     */
    protected $purchaseOrders = null;

    /**
     * @param string $payerName
     * @param float $timestamp
     * @param string $key
     * @param ArrayOfTipaltiPurchaseOrderItem $purchaseOrders
     */
    public function __construct($payerName, $timestamp, $key, $purchaseOrders)
    {
        $this->payerName = $payerName;
        $this->timestamp = $timestamp;
        $this->key = $key;
        $this->purchaseOrders = $purchaseOrders;
    }

    /**
     * @return string
     */
    public function getPayerName()
    {
        return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return CreateOrUpdatePurchaseOrders
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param float $timestamp
     * @return CreateOrUpdatePurchaseOrders
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return CreateOrUpdatePurchaseOrders
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return ArrayOfTipaltiPurchaseOrderItem
     */
    public function getPurchaseOrders()
    {
        return $this->purchaseOrders;
    }

    /**
     * @param ArrayOfTipaltiPurchaseOrderItem $purchaseOrders
     * @return CreateOrUpdatePurchaseOrders
     */
    public function setPurchaseOrders($purchaseOrders)
    {
        $this->purchaseOrders = $purchaseOrders;
        return $this;
    }
}
