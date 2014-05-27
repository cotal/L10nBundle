<?php

namespace L10nBundle\Entity;

class L10nResource
{
    /**
     * ID of the resource
     * @var mixed
     */
    protected $idResource;

    /**
     * ID of a localization
     * @var mixed
     */
    protected $idLocalization;

    /**
     * List of L10n values
     * @var array
     */
    protected $valueList;




    /**
     *
     * @return mixed
     */
    public function getIdResource()
    {
        return $this->idResource;
    }

    /**
     *
     * @param mixed $idResource
     * @return L10nResource
     */
    public function setIdResource($idResource)
    {
        $this->idResource = $idResource;
        return $this;
    }

    /**
     *
     * @return mixed
     */
    public function getIdLocalization()
    {
        return $this->idLocalization;
    }

    /**
     *
     * @param mixed $idLocalization
     * @return L10nResource
     */
    public function setIdLocalization($idLocalization)
    {
        $this->idLocalization = $idLocalization;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getValueList()
    {
        return $this->valueList;
    }

    /**
     *
     * @param array $valueList
     * @return L10nResource
     */
    public function setValueList(array $valueList)
    {
        $this->valueList = $valueList;
        return $this;
    }
}