<?php

/**
 * Modified: 2020-05-26T22:10:14+00:00
 */
namespace Office365\Common;


use Office365\Entity;

/**
 * An aggregation of information about a person from across mail, contacts, and social networks. People can be local contacts, contacts from social networking or your organization's directory, and people from recent communications (such as email and Skype).
 */
class Person extends Entity
{
    /**
     * The person's display name.
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * The person's display name.
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * The person's given name.
     * @return string
     */
    public function getGivenName()
    {
        if (!$this->isPropertyAvailable("GivenName")) {
            return null;
        }
        return $this->getProperty("GivenName");
    }
    /**
     * The person's given name.
     * @var string
     */
    public function setGivenName($value)
    {
        $this->setProperty("GivenName", $value, true);
    }
    /**
     * The person's surname.
     * @return string
     */
    public function getSurname()
    {
        if (!$this->isPropertyAvailable("Surname")) {
            return null;
        }
        return $this->getProperty("Surname");
    }
    /**
     * The person's surname.
     * @var string
     */
    public function setSurname($value)
    {
        $this->setProperty("Surname", $value, true);
    }
    /**
     * The person's birthday.
     * @return string
     */
    public function getBirthday()
    {
        if (!$this->isPropertyAvailable("Birthday")) {
            return null;
        }
        return $this->getProperty("Birthday");
    }
    /**
     * The person's birthday.
     * @var string
     */
    public function setBirthday($value)
    {
        $this->setProperty("Birthday", $value, true);
    }
    /**
     * Free-form notes that the user has taken about this person.
     * @return string
     */
    public function getPersonNotes()
    {
        if (!$this->isPropertyAvailable("PersonNotes")) {
            return null;
        }
        return $this->getProperty("PersonNotes");
    }
    /**
     * Free-form notes that the user has taken about this person.
     * @var string
     */
    public function setPersonNotes($value)
    {
        $this->setProperty("PersonNotes", $value, true);
    }
    /**
     * `true` if the user has flagged this person as a favorite.
     * @return bool
     */
    public function getIsFavorite()
    {
        if (!$this->isPropertyAvailable("IsFavorite")) {
            return null;
        }
        return $this->getProperty("IsFavorite");
    }
    /**
     * `true` if the user has flagged this person as a favorite.
     * @var bool
     */
    public function setIsFavorite($value)
    {
        $this->setProperty("IsFavorite", $value, true);
    }
    /**
     * The person's job title.
     * @return string
     */
    public function getJobTitle()
    {
        if (!$this->isPropertyAvailable("JobTitle")) {
            return null;
        }
        return $this->getProperty("JobTitle");
    }
    /**
     * The person's job title.
     * @var string
     */
    public function setJobTitle($value)
    {
        $this->setProperty("JobTitle", $value, true);
    }
    /**
     * The name of the person's company.
     * @return string
     */
    public function getCompanyName()
    {
        if (!$this->isPropertyAvailable("CompanyName")) {
            return null;
        }
        return $this->getProperty("CompanyName");
    }
    /**
     * The name of the person's company.
     * @var string
     */
    public function setCompanyName($value)
    {
        $this->setProperty("CompanyName", $value, true);
    }
    /**
     * The phonetic Japanese name of the person's company.
     * @return string
     */
    public function getYomiCompany()
    {
        if (!$this->isPropertyAvailable("YomiCompany")) {
            return null;
        }
        return $this->getProperty("YomiCompany");
    }
    /**
     * The phonetic Japanese name of the person's company.
     * @var string
     */
    public function setYomiCompany($value)
    {
        $this->setProperty("YomiCompany", $value, true);
    }
    /**
     * The person's department.
     * @return string
     */
    public function getDepartment()
    {
        if (!$this->isPropertyAvailable("Department")) {
            return null;
        }
        return $this->getProperty("Department");
    }
    /**
     * The person's department.
     * @var string
     */
    public function setDepartment($value)
    {
        $this->setProperty("Department", $value, true);
    }
    /**
     * The location of the person's office.
     * @return string
     */
    public function getOfficeLocation()
    {
        if (!$this->isPropertyAvailable("OfficeLocation")) {
            return null;
        }
        return $this->getProperty("OfficeLocation");
    }
    /**
     * The location of the person's office.
     * @var string
     */
    public function setOfficeLocation($value)
    {
        $this->setProperty("OfficeLocation", $value, true);
    }
    /**
     * The person's profession.
     * @return string
     */
    public function getProfession()
    {
        if (!$this->isPropertyAvailable("Profession")) {
            return null;
        }
        return $this->getProperty("Profession");
    }
    /**
     * The person's profession.
     * @var string
     */
    public function setProfession($value)
    {
        $this->setProperty("Profession", $value, true);
    }
    /**
     * The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard [RFC 822](https://www.ietf.org/rfc/rfc0822.txt). By convention, this should map to the person's email name. The general format is alias@domain.
     * @return string
     */
    public function getUserPrincipalName()
    {
        if (!$this->isPropertyAvailable("UserPrincipalName")) {
            return null;
        }
        return $this->getProperty("UserPrincipalName");
    }
    /**
     * The user principal name (UPN) of the person. The UPN is an Internet-style login name for the person based on the Internet standard [RFC 822](https://www.ietf.org/rfc/rfc0822.txt). By convention, this should map to the person's email name. The general format is alias@domain.
     * @var string
     */
    public function setUserPrincipalName($value)
    {
        $this->setProperty("UserPrincipalName", $value, true);
    }
    /**
     * The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
     * @return string
     */
    public function getImAddress()
    {
        if (!$this->isPropertyAvailable("ImAddress")) {
            return null;
        }
        return $this->getProperty("ImAddress");
    }
    /**
     * The instant message voice over IP (VOIP) session initiation protocol (SIP) address for the user. Read-only.
     * @var string
     */
    public function setImAddress($value)
    {
        $this->setProperty("ImAddress", $value, true);
    }
    /**
     * The type of person.
     * @return PersonType
     */
    public function getPersonType()
    {
        if (!$this->isPropertyAvailable("PersonType")) {
            return null;
        }
        return $this->getProperty("PersonType");
    }
    /**
     * The type of person.
     * @var PersonType
     */
    public function setPersonType($value)
    {
        $this->setProperty("PersonType", $value, true);
    }
}