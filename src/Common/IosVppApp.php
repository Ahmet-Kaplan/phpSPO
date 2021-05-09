<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Common;

use Office365\Runtime\ClientObject;
class IosVppApp extends ClientObject
{
    /**
     * @return integer
     */
    public function getUsedLicenseCount()
    {
        if (!$this->isPropertyAvailable("UsedLicenseCount")) {
            return null;
        }
        return $this->getProperty("UsedLicenseCount");
    }
    /**
     * @var integer
     */
    public function setUsedLicenseCount($value)
    {
        $this->setProperty("UsedLicenseCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getTotalLicenseCount()
    {
        if (!$this->isPropertyAvailable("TotalLicenseCount")) {
            return null;
        }
        return $this->getProperty("TotalLicenseCount");
    }
    /**
     * @var integer
     */
    public function setTotalLicenseCount($value)
    {
        $this->setProperty("TotalLicenseCount", $value, true);
    }
    /**
     * @return string
     */
    public function getAppStoreUrl()
    {
        if (!$this->isPropertyAvailable("AppStoreUrl")) {
            return null;
        }
        return $this->getProperty("AppStoreUrl");
    }
    /**
     * @var string
     */
    public function setAppStoreUrl($value)
    {
        $this->setProperty("AppStoreUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getVppTokenOrganizationName()
    {
        if (!$this->isPropertyAvailable("VppTokenOrganizationName")) {
            return null;
        }
        return $this->getProperty("VppTokenOrganizationName");
    }
    /**
     * @var string
     */
    public function setVppTokenOrganizationName($value)
    {
        $this->setProperty("VppTokenOrganizationName", $value, true);
    }
    /**
     * @return string
     */
    public function getVppTokenAppleId()
    {
        if (!$this->isPropertyAvailable("VppTokenAppleId")) {
            return null;
        }
        return $this->getProperty("VppTokenAppleId");
    }
    /**
     * @var string
     */
    public function setVppTokenAppleId($value)
    {
        $this->setProperty("VppTokenAppleId", $value, true);
    }
    /**
     * @return string
     */
    public function getBundleId()
    {
        if (!$this->isPropertyAvailable("BundleId")) {
            return null;
        }
        return $this->getProperty("BundleId");
    }
    /**
     * @var string
     */
    public function setBundleId($value)
    {
        $this->setProperty("BundleId", $value, true);
    }
    /**
     * @return VppLicensingType
     */
    public function getLicensingType()
    {
        if (!$this->isPropertyAvailable("LicensingType")) {
            return null;
        }
        return $this->getProperty("LicensingType");
    }
    /**
     * @var VppLicensingType
     */
    public function setLicensingType($value)
    {
        $this->setProperty("LicensingType", $value, true);
    }
    /**
     * @return IosDeviceType
     */
    public function getApplicableDeviceType()
    {
        if (!$this->isPropertyAvailable("ApplicableDeviceType")) {
            return null;
        }
        return $this->getProperty("ApplicableDeviceType");
    }
    /**
     * @var IosDeviceType
     */
    public function setApplicableDeviceType($value)
    {
        $this->setProperty("ApplicableDeviceType", $value, true);
    }
}