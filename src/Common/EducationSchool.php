<?php

/**
 * Modified: 2020-05-25T06:42:59+00:00
 */
namespace Office365\Common;

use Office365\OutlookServices\PhysicalAddress;
use Office365\Runtime\ClientObject;

/**
 * A resource representing a school and used to manage the classes, teachers, and students of the represented school.  
 */
class EducationSchool extends ClientObject
{
    /**
     * @return string
     */
    public function getPrincipalEmail()
    {
        if (!$this->isPropertyAvailable("PrincipalEmail")) {
            return null;
        }
        return $this->getProperty("PrincipalEmail");
    }
    /**
     * @var string
     */
    public function setPrincipalEmail($value)
    {
        $this->setProperty("PrincipalEmail", $value, true);
    }
    /**
     * @return string
     */
    public function getPrincipalName()
    {
        if (!$this->isPropertyAvailable("PrincipalName")) {
            return null;
        }
        return $this->getProperty("PrincipalName");
    }
    /**
     * @var string
     */
    public function setPrincipalName($value)
    {
        $this->setProperty("PrincipalName", $value, true);
    }
    /**
     * @return string
     */
    public function getExternalPrincipalId()
    {
        if (!$this->isPropertyAvailable("ExternalPrincipalId")) {
            return null;
        }
        return $this->getProperty("ExternalPrincipalId");
    }
    /**
     * @var string
     */
    public function setExternalPrincipalId($value)
    {
        $this->setProperty("ExternalPrincipalId", $value, true);
    }
    /**
     * @return string
     */
    public function getLowestGrade()
    {
        if (!$this->isPropertyAvailable("LowestGrade")) {
            return null;
        }
        return $this->getProperty("LowestGrade");
    }
    /**
     * @var string
     */
    public function setLowestGrade($value)
    {
        $this->setProperty("LowestGrade", $value, true);
    }
    /**
     * @return string
     */
    public function getHighestGrade()
    {
        if (!$this->isPropertyAvailable("HighestGrade")) {
            return null;
        }
        return $this->getProperty("HighestGrade");
    }
    /**
     * @var string
     */
    public function setHighestGrade($value)
    {
        $this->setProperty("HighestGrade", $value, true);
    }
    /**
     * @return string
     */
    public function getSchoolNumber()
    {
        if (!$this->isPropertyAvailable("SchoolNumber")) {
            return null;
        }
        return $this->getProperty("SchoolNumber");
    }
    /**
     * @var string
     */
    public function setSchoolNumber($value)
    {
        $this->setProperty("SchoolNumber", $value, true);
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        if (!$this->isPropertyAvailable("ExternalId")) {
            return null;
        }
        return $this->getProperty("ExternalId");
    }
    /**
     * @var string
     */
    public function setExternalId($value)
    {
        $this->setProperty("ExternalId", $value, true);
    }
    /**
     * @return string
     */
    public function getPhone()
    {
        if (!$this->isPropertyAvailable("Phone")) {
            return null;
        }
        return $this->getProperty("Phone");
    }
    /**
     * @var string
     */
    public function setPhone($value)
    {
        $this->setProperty("Phone", $value, true);
    }
    /**
     * @return string
     */
    public function getFax()
    {
        if (!$this->isPropertyAvailable("Fax")) {
            return null;
        }
        return $this->getProperty("Fax");
    }
    /**
     * @var string
     */
    public function setFax($value)
    {
        $this->setProperty("Fax", $value, true);
    }
    /**
     * @return IdentitySet
     */
    public function getCreatedBy()
    {
        if (!$this->isPropertyAvailable("CreatedBy")) {
            return null;
        }
        return $this->getProperty("CreatedBy");
    }
    /**
     * @var IdentitySet
     */
    public function setCreatedBy($value)
    {
        $this->setProperty("CreatedBy", $value, true);
    }
    /**
     * @return PhysicalAddress
     */
    public function getAddress()
    {
        if (!$this->isPropertyAvailable("Address")) {
            return null;
        }
        return $this->getProperty("Address");
    }
    /**
     * @var PhysicalAddress
     */
    public function setAddress($value)
    {
        $this->setProperty("Address", $value, true);
    }
}