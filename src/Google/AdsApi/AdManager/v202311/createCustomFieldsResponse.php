<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createCustomFieldsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\CustomField[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\CustomField[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\CustomField[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\CustomField[]|null $rval
     * @return \Google\AdsApi\AdManager\v202311\createCustomFieldsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
