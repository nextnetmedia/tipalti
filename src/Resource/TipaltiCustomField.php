<?php

namespace Nextnetmedia\Tipalti\Resource;

class TipaltiCustomField
{
    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var CustomFieldAction $Action
     */
    protected $Action = null;

    /**
     * @var ArrayOfCustomFieldEntity $Entity
     */
    protected $Entity = null;

    /**
     * @var CustomFieldSubEntity $SubEntity
     */
    protected $SubEntity = null;

    /**
     * @var CustomFieldType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $IframeDisplay
     */
    protected $IframeDisplay = null;

    /**
     * @var ArrayOfCustomFieldValue $Values
     */
    protected $Values = null;

    /**
     * @param CustomFieldAction $Action
     * @param CustomFieldType $Type
     */
    public function __construct($Action, $Type)
    {
        $this->Action = $Action;
        $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return TipaltiCustomField
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return TipaltiCustomField
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return CustomFieldAction
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * @param CustomFieldAction $Action
     * @return TipaltiCustomField
     */
    public function setAction($Action)
    {
        $this->Action = $Action;
        return $this;
    }

    /**
     * @return ArrayOfCustomFieldEntity
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    /**
     * @param ArrayOfCustomFieldEntity $Entity
     * @return TipaltiCustomField
     */
    public function setEntity($Entity)
    {
        $this->Entity = $Entity;
        return $this;
    }

    /**
     * @return CustomFieldSubEntity
     */
    public function getSubEntity()
    {
        return $this->SubEntity;
    }

    /**
     * @param CustomFieldSubEntity $SubEntity
     * @return TipaltiCustomField
     */
    public function setSubEntity($SubEntity)
    {
        $this->SubEntity = $SubEntity;
        return $this;
    }

    /**
     * @return CustomFieldType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param CustomFieldType $Type
     * @return TipaltiCustomField
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIframeDisplay()
    {
        return $this->IframeDisplay;
    }

    /**
     * @param boolean $IframeDisplay
     * @return TipaltiCustomField
     */
    public function setIframeDisplay($IframeDisplay)
    {
        $this->IframeDisplay = $IframeDisplay;
        return $this;
    }

    /**
     * @return ArrayOfCustomFieldValue
     */
    public function getValues()
    {
        return $this->Values;
    }

    /**
     * @param ArrayOfCustomFieldValue $Values
     * @return TipaltiCustomField
     */
    public function setValues($Values)
    {
        $this->Values = $Values;
        return $this;
    }
}
