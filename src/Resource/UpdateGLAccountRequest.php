<?php

namespace Nextnetmedia\Tipalti\Resource;

class UpdateGLAccountRequest extends TipaltiGLAccount
{
    /**
     * @var TipaltiGlAccountAction $Action
     */
    protected $Action = null;

    /**
     * @var ArrayOfString $PayerEntities
     */
    protected $PayerEntities = null;

    /**
     * @var ArrayOfString $Category
     */
    protected $Category = null;

    /**
     * @param TipaltiGlAccountAction $Action
     */
    public function __construct($Action)
    {
        parent::__construct();
        $this->Action = $Action;
    }

    /**
     * @return TipaltiGlAccountAction
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * @param TipaltiGlAccountAction $Action
     * @return UpdateGLAccountRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPayerEntities()
    {
        return $this->PayerEntities;
    }

    /**
     * @param ArrayOfString $PayerEntities
     * @return UpdateGLAccountRequest
     */
    public function setPayerEntities($PayerEntities)
    {
        $this->PayerEntities = $PayerEntities;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param ArrayOfString $Category
     * @return UpdateGLAccountRequest
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }
}
