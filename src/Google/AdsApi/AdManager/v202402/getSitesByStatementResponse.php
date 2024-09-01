<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSitesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202402\SitePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202402\SitePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\SitePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\SitePage $rval
     * @return \Google\AdsApi\AdManager\v202402\getSitesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
