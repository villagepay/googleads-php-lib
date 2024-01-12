<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CreativeReviewService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202308\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202308\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202308\\ApplicationException',
      'ApproveCreativeReviews' => 'Google\\AdsApi\\AdManager\\v202308\\ApproveCreativeReviews',
      'ArchiveCreativeReviews' => 'Google\\AdsApi\\AdManager\\v202308\\ArchiveCreativeReviews',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202308\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202308\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202308\\CommonError',
      'CreativeReviewAction' => 'Google\\AdsApi\\AdManager\\v202308\\CreativeReviewAction',
      'CreativeReview' => 'Google\\AdsApi\\AdManager\\v202308\\CreativeReview',
      'CreativeReviewPage' => 'Google\\AdsApi\\AdManager\\v202308\\CreativeReviewPage',
      'Date' => 'Google\\AdsApi\\AdManager\\v202308\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202308\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateValue',
      'DisapproveCreativeReviews' => 'Google\\AdsApi\\AdManager\\v202308\\DisapproveCreativeReviews',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202308\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202308\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202308\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202308\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202308\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202308\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202308\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202308\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202308\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202308\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202308\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202308\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202308\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202308\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202308\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202308\\TextValue',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202308\\UpdateResult',
      'Value' => 'Google\\AdsApi\\AdManager\\v202308\\Value',
      'getCreativeReviewsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getCreativeReviewsByStatementResponse',
      'performCreativeReviewActionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\performCreativeReviewActionResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202308/CreativeReviewService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a {@link CreativeReviewPage} of {@link CreativeReview} objects that satisfy the given
     * {@link Statement#query}. This will allow you to review creatives that have displayed (or could
     * have displayed) on your pages or apps in the last 30 days. To ensure that you are always
     * reviewing the most important creatives first, the {@link CreativeReview} objects are ranked
     * according to the number of impressions that they've received.
     *
     * <p>This feature is not yet openly available. Publishers will need to apply for access for this
     * feature through their account managers.
     *
     * @param \Google\AdsApi\AdManager\v202308\Statement $statement
     * @return \Google\AdsApi\AdManager\v202308\CreativeReviewPage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getCreativeReviewsByStatement(\Google\AdsApi\AdManager\v202308\Statement $statement)
    {
      return $this->__soapCall('getCreativeReviewsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Performs actions on {@link CreativeReview} objects that match the given {@link
     * Statement#query}. You can use actions to approve (allow) or disapprove (block) creatives, as
     * seen in the corresponding {@link CreativeReview} objects. You can also archive creatives to
     * allow you to retrieve new {@link CreativeReview} objects while previously retrieved {@link
     * CreativeReview} objects are in pending approval.
     *
     * @param \Google\AdsApi\AdManager\v202308\CreativeReviewAction $creativeReviewAction
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function performCreativeReviewAction(\Google\AdsApi\AdManager\v202308\CreativeReviewAction $creativeReviewAction, \Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('performCreativeReviewAction', array(array('creativeReviewAction' => $creativeReviewAction, 'filterStatement' => $filterStatement)))->getRval();
    }

}
