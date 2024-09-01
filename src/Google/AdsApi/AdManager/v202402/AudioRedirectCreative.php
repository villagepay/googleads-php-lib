<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudioRedirectCreative extends \Google\AdsApi\AdManager\v202402\BaseAudioCreative
{

    /**
     * @var \Google\AdsApi\AdManager\v202402\VideoRedirectAsset[] $audioAssets
     */
    protected $audioAssets = null;

    /**
     * @var \Google\AdsApi\AdManager\v202402\VideoRedirectAsset $mezzanineFile
     */
    protected $mezzanineFile = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202402\Size $size
     * @param string $previewUrl
     * @param string[] $policyLabels
     * @param \Google\AdsApi\AdManager\v202402\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202402\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202402\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202402\ThirdPartyDataDeclaration $thirdPartyDataDeclaration
     * @param string $destinationUrl
     * @param string $destinationUrlType
     * @param int $duration
     * @param boolean $allowDurationOverride
     * @param \Google\AdsApi\AdManager\v202402\ConversionEvent_TrackingUrlsMapEntry[] $trackingUrls
     * @param int[] $companionCreativeIds
     * @param string $customParameters
     * @param string $adId
     * @param string $adIdType
     * @param string $skippableAdType
     * @param string $vastPreviewUrl
     * @param string $sslScanResult
     * @param string $sslManualOverride
     * @param \Google\AdsApi\AdManager\v202402\VideoRedirectAsset[] $audioAssets
     * @param \Google\AdsApi\AdManager\v202402\VideoRedirectAsset $mezzanineFile
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyLabels = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $thirdPartyDataDeclaration = null, $destinationUrl = null, $destinationUrlType = null, $duration = null, $allowDurationOverride = null, array $trackingUrls = null, array $companionCreativeIds = null, $customParameters = null, $adId = null, $adIdType = null, $skippableAdType = null, $vastPreviewUrl = null, $sslScanResult = null, $sslManualOverride = null, array $audioAssets = null, $mezzanineFile = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyLabels, $appliedLabels, $lastModifiedDateTime, $customFieldValues, $thirdPartyDataDeclaration, $destinationUrl, $destinationUrlType, $duration, $allowDurationOverride, $trackingUrls, $companionCreativeIds, $customParameters, $adId, $adIdType, $skippableAdType, $vastPreviewUrl, $sslScanResult, $sslManualOverride);
      $this->audioAssets = $audioAssets;
      $this->mezzanineFile = $mezzanineFile;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\VideoRedirectAsset[]
     */
    public function getAudioAssets()
    {
      return $this->audioAssets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\VideoRedirectAsset[]|null $audioAssets
     * @return \Google\AdsApi\AdManager\v202402\AudioRedirectCreative
     */
    public function setAudioAssets(array $audioAssets = null)
    {
      $this->audioAssets = $audioAssets;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\VideoRedirectAsset
     */
    public function getMezzanineFile()
    {
      return $this->mezzanineFile;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\VideoRedirectAsset $mezzanineFile
     * @return \Google\AdsApi\AdManager\v202402\AudioRedirectCreative
     */
    public function setMezzanineFile($mezzanineFile)
    {
      $this->mezzanineFile = $mezzanineFile;
      return $this;
    }

}
