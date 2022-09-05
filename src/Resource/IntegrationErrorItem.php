<?php

namespace Nextnetmedia\Tipalti\Resource;

class IntegrationErrorItem
{

    /**
     * @var int $CreationTimestamp
     */
    protected $CreationTimestamp = null;

    /**
     * @var string $SyncDirection
     */
    protected $SyncDirection = null;

    /**
     * @var string $ErrorSubject
     */
    protected $ErrorSubject = null;

    /**
     * @var string $ErrorDetails
     */
    protected $ErrorDetails = null;

    /**
     * @var string $IntegrationName
     */
    protected $IntegrationName = null;

    /**
     * @var string $IntegrationVersion
     */
    protected $IntegrationVersion = null;

    /**
     * @param int $CreationTimestamp
     */
    public function __construct($CreationTimestamp)
    {
      $this->CreationTimestamp = $CreationTimestamp;
    }

    /**
     * @return int
     */
    public function getCreationTimestamp()
    {
      return $this->CreationTimestamp;
    }

    /**
     * @param int $CreationTimestamp
     * @return IntegrationErrorItem
     */
    public function setCreationTimestamp($CreationTimestamp)
    {
      $this->CreationTimestamp = $CreationTimestamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getSyncDirection()
    {
      return $this->SyncDirection;
    }

    /**
     * @param string $SyncDirection
     * @return IntegrationErrorItem
     */
    public function setSyncDirection($SyncDirection)
    {
      $this->SyncDirection = $SyncDirection;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorSubject()
    {
      return $this->ErrorSubject;
    }

    /**
     * @param string $ErrorSubject
     * @return IntegrationErrorItem
     */
    public function setErrorSubject($ErrorSubject)
    {
      $this->ErrorSubject = $ErrorSubject;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
      return $this->ErrorDetails;
    }

    /**
     * @param string $ErrorDetails
     * @return IntegrationErrorItem
     */
    public function setErrorDetails($ErrorDetails)
    {
      $this->ErrorDetails = $ErrorDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationName()
    {
      return $this->IntegrationName;
    }

    /**
     * @param string $IntegrationName
     * @return IntegrationErrorItem
     */
    public function setIntegrationName($IntegrationName)
    {
      $this->IntegrationName = $IntegrationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationVersion()
    {
      return $this->IntegrationVersion;
    }

    /**
     * @param string $IntegrationVersion
     * @return IntegrationErrorItem
     */
    public function setIntegrationVersion($IntegrationVersion)
    {
      $this->IntegrationVersion = $IntegrationVersion;
      return $this;
    }

}
