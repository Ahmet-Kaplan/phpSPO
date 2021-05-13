<?php

/**
 * Modified: 2020-05-25T06:42:59+00:00
 */
namespace Office365\Common;

use Office365\OutlookServices\PhysicalAddress;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 *  "A user in the system. This is an education-specific variant of the user with the same `id` that Microsoft Graph will return from the non-education-specific `/users` endpoint."
 */
class EducationUser extends ClientObject
{
    /**
     *  The middle name of user.
     * @return string
     */
    public function getMiddleName()
    {
        if (!$this->isPropertyAvailable("MiddleName")) {
            return null;
        }
        return $this->getProperty("MiddleName");
    }
    /**
     *  The middle name of user.
     * @var string
     */
    public function setMiddleName($value)
    {
        $this->setProperty("MiddleName", $value, true);
    }
    /**
     *  **True** if the account is enabled; otherwise, **false**. This property is required when a user is created. Supports $filter.    
     * @return bool
     */
    public function getAccountEnabled()
    {
        if (!$this->isPropertyAvailable("AccountEnabled")) {
            return null;
        }
        return $this->getProperty("AccountEnabled");
    }
    /**
     *  **True** if the account is enabled; otherwise, **false**. This property is required when a user is created. Supports $filter.    
     * @var bool
     */
    public function setAccountEnabled($value)
    {
        $this->setProperty("AccountEnabled", $value, true);
    }
    /**
     * The telephone numbers for the user. **Note:** Although this is a string collection, only one number can be set for this property.
     * @return array
     */
    public function getBusinessPhones()
    {
        if (!$this->isPropertyAvailable("BusinessPhones")) {
            return null;
        }
        return $this->getProperty("BusinessPhones");
    }
    /**
     * The telephone numbers for the user. **Note:** Although this is a string collection, only one number can be set for this property.
     * @var array
     */
    public function setBusinessPhones($value)
    {
        $this->setProperty("BusinessPhones", $value, true);
    }
    /**
     * The name for the department in which the user works. Supports $filter.
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
     * The name for the department in which the user works. Supports $filter.
     * @var string
     */
    public function setDepartment($value)
    {
        $this->setProperty("Department", $value, true);
    }
    /**
     * The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
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
     * The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates. Supports $filter and $orderby.
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * The given name (first name) of the user. Supports $filter.
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
     * The given name (first name) of the user. Supports $filter.
     * @var string
     */
    public function setGivenName($value)
    {
        $this->setProperty("GivenName", $value, true);
    }
    /**
     * The SMTP address for the user; for example, "jeff@contoso.onmicrosoft.com". Read-Only. Supports $filter.
     * @return string
     */
    public function getMail()
    {
        if (!$this->isPropertyAvailable("Mail")) {
            return null;
        }
        return $this->getProperty("Mail");
    }
    /**
     * The SMTP address for the user; for example, "jeff@contoso.onmicrosoft.com". Read-Only. Supports $filter.
     * @var string
     */
    public function setMail($value)
    {
        $this->setProperty("Mail", $value, true);
    }
    /**
     * The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     * @return string
     */
    public function getMailNickname()
    {
        if (!$this->isPropertyAvailable("MailNickname")) {
            return null;
        }
        return $this->getProperty("MailNickname");
    }
    /**
     * The mail alias for the user. This property must be specified when a user is created. Supports $filter.
     * @var string
     */
    public function setMailNickname($value)
    {
        $this->setProperty("MailNickname", $value, true);
    }
    /**
     * The primary cellular telephone number for the user.
     * @return string
     */
    public function getMobilePhone()
    {
        if (!$this->isPropertyAvailable("MobilePhone")) {
            return null;
        }
        return $this->getProperty("MobilePhone");
    }
    /**
     * The primary cellular telephone number for the user.
     * @var string
     */
    public function setMobilePhone($value)
    {
        $this->setProperty("MobilePhone", $value, true);
    }
    /**
     * Specifies password policies for the user. This value is an enumeration with one possible value being “DisableStrongPassword”, which allows weaker passwords than the default policy to be specified. “DisablePasswordExpiration” can also be specified. The two can be specified together; for example: "DisablePasswordExpiration, DisableStrongPassword".
     * @return string
     */
    public function getPasswordPolicies()
    {
        if (!$this->isPropertyAvailable("PasswordPolicies")) {
            return null;
        }
        return $this->getProperty("PasswordPolicies");
    }
    /**
     * Specifies password policies for the user. This value is an enumeration with one possible value being “DisableStrongPassword”, which allows weaker passwords than the default policy to be specified. “DisablePasswordExpiration” can also be specified. The two can be specified together; for example: "DisablePasswordExpiration, DisableStrongPassword".
     * @var string
     */
    public function setPasswordPolicies($value)
    {
        $this->setProperty("PasswordPolicies", $value, true);
    }
    /**
     * Specifies the password profile for the user. The profile contains the user’s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the **passwordPolicies** property. By default, a strong password is required.
     * @return PasswordProfile
     */
    public function getPasswordProfile()
    {
        if (!$this->isPropertyAvailable("PasswordProfile")) {
            return null;
        }
        return $this->getProperty("PasswordProfile");
    }
    /**
     * Specifies the password profile for the user. The profile contains the user’s password. This property is required when a user is created. The password in the profile must satisfy minimum requirements as specified by the **passwordPolicies** property. By default, a strong password is required.
     * @var PasswordProfile
     */
    public function setPasswordProfile($value)
    {
        $this->setProperty("PasswordProfile", $value, true);
    }
    /**
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
     * @var string
     */
    public function setOfficeLocation($value)
    {
        $this->setProperty("OfficeLocation", $value, true);
    }
    /**
     * The preferred language for the user. Should follow ISO 639-1 Code; for example, "en-US".
     * @return string
     */
    public function getPreferredLanguage()
    {
        if (!$this->isPropertyAvailable("PreferredLanguage")) {
            return null;
        }
        return $this->getProperty("PreferredLanguage");
    }
    /**
     * The preferred language for the user. Should follow ISO 639-1 Code; for example, "en-US".
     * @var string
     */
    public function setPreferredLanguage($value)
    {
        $this->setProperty("PreferredLanguage", $value, true);
    }
    /**
     * @return bool
     */
    public function getShowInAddressList()
    {
        if (!$this->isPropertyAvailable("ShowInAddressList")) {
            return null;
        }
        return $this->getProperty("ShowInAddressList");
    }
    /**
     * @var bool
     */
    public function setShowInAddressList($value)
    {
        $this->setProperty("ShowInAddressList", $value, true);
    }
    /**
     * The user's surname (family name or last name). Supports $filter.
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
     * The user's surname (family name or last name). Supports $filter.
     * @var string
     */
    public function setSurname($value)
    {
        $this->setProperty("Surname", $value, true);
    }
    /**
     * A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: "US", "JP", and "GB". Not nullable. Supports $filter.
     * @return string
     */
    public function getUsageLocation()
    {
        if (!$this->isPropertyAvailable("UsageLocation")) {
            return null;
        }
        return $this->getProperty("UsageLocation");
    }
    /**
     * A two-letter country code (ISO standard 3166). Required for users who will be assigned licenses due to a legal requirement to check for availability of services in countries or regions. Examples include: "US", "JP", and "GB". Not nullable. Supports $filter.
     * @var string
     */
    public function setUsageLocation($value)
    {
        $this->setProperty("UsageLocation", $value, true);
    }
    /**
     * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the **verifiedDomains** property of [organization](organization.md). Supports $filter and $orderby.
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
     * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created. The verified domains for the tenant can be accessed from the **verifiedDomains** property of [organization](organization.md). Supports $filter and $orderby.
     * @var string
     */
    public function setUserPrincipalName($value)
    {
        $this->setProperty("UserPrincipalName", $value, true);
    }
    /**
     * A string value that can be used to classify user types in your directory, such as “Member” and “Guest”. Supports $filter.          
     * @return string
     */
    public function getUserType()
    {
        if (!$this->isPropertyAvailable("UserType")) {
            return null;
        }
        return $this->getProperty("UserType");
    }
    /**
     * A string value that can be used to classify user types in your directory, such as “Member” and “Guest”. Supports $filter.          
     * @var string
     */
    public function setUserType($value)
    {
        $this->setProperty("UserType", $value, true);
    }
    /**
     *  The directory user corresponding to this user.
     * @return User
     */
    public function getUser()
    {
        if (!$this->isPropertyAvailable("User")) {
            $this->setProperty("User", new User($this->getContext(), new ResourcePath("User", $this->getResourcePath())));
        }
        return $this->getProperty("User");
    }
    /**
     *  Address where user lives.
     * @return PhysicalAddress
     */
    public function getResidenceAddress()
    {
        if (!$this->isPropertyAvailable("ResidenceAddress")) {
            return null;
        }
        return $this->getProperty("ResidenceAddress");
    }
    /**
     *  Address where user lives.
     * @var PhysicalAddress
     */
    public function setResidenceAddress($value)
    {
        $this->setProperty("ResidenceAddress", $value, true);
    }
    /**
     *  Mail address of user.
     * @return PhysicalAddress
     */
    public function getMailingAddress()
    {
        if (!$this->isPropertyAvailable("MailingAddress")) {
            return null;
        }
        return $this->getProperty("MailingAddress");
    }
    /**
     *  Mail address of user.
     * @var PhysicalAddress
     */
    public function setMailingAddress($value)
    {
        $this->setProperty("MailingAddress", $value, true);
    }
    /**
     *  If the primary role is student, this block will contain student specific data.
     * @return EducationStudent
     */
    public function getStudent()
    {
        if (!$this->isPropertyAvailable("Student")) {
            return null;
        }
        return $this->getProperty("Student");
    }
    /**
     *  If the primary role is student, this block will contain student specific data.
     * @var EducationStudent
     */
    public function setStudent($value)
    {
        $this->setProperty("Student", $value, true);
    }
    /**
     *  If the primary role is teacher, this block will contain teacher specific data.
     * @return EducationTeacher
     */
    public function getTeacher()
    {
        if (!$this->isPropertyAvailable("Teacher")) {
            return null;
        }
        return $this->getProperty("Teacher");
    }
    /**
     *  If the primary role is teacher, this block will contain teacher specific data.
     * @var EducationTeacher
     */
    public function setTeacher($value)
    {
        $this->setProperty("Teacher", $value, true);
    }
    /**
     *  Entity who created the user. 
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
     *  Entity who created the user. 
     * @var IdentitySet
     */
    public function setCreatedBy($value)
    {
        $this->setProperty("CreatedBy", $value, true);
    }
}