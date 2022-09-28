<?php

namespace Nextnetmedia\Tipalti\Resource;

class CustomFieldInfo
{
    /**
     * @var ArrayOfString $Entity
     */
    protected $Entity = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ValueType
     */
    protected $ValueType = null;

    /**
     * @var string $SubEntity
     */
    protected $SubEntity = null;

    /**
     * @var ArrayOfCustomFieldValue $Values
     */
    protected $Values = null;

    /**
     * @var string $Category
     */
    protected $Category = null;


    public function __construct()
    {
    }

    /**
     * @return ArrayOfString
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    /**
     * @param ArrayOfString $Entity
     * @return CustomFieldInfo
     */
    public function setEntity($Entity)
    {
        $this->Entity = $Entity;
        return $this;
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
     * @return CustomFieldInfo
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
     * @return CustomFieldInfo
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->ValueType;
    }

    /**
     * @param string $ValueType
     * @return CustomFieldInfo
     */
    public function setValueType($ValueType)
    {
        $this->ValueType = $ValueType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubEntity()
    {
        return $this->SubEntity;
    }

    /**
     * @param string $SubEntity
     * @return CustomFieldInfo
     */
    public function setSubEntity($SubEntity)
    {
        $this->SubEntity = $SubEntity;
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
     * @return CustomFieldInfo
     */
    public function setValues($Values)
    {
        $this->Values = $Values;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return CustomFieldInfo
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }
}
