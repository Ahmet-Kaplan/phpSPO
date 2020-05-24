<?php

/**
 * Generated by phpSPO model generator 2020-05-24T22:10:26+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 *  "A team in Microsoft Teams is a collection of channels. "
 */
class Team extends ClientObject
{
    /**
     *  A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select **Get link to team**. This URL should be treated as an opaque blob, and not parsed. 
     * @return string
     */
    public function getWebUrl()
    {
        if (!$this->isPropertyAvailable("WebUrl")) {
            return null;
        }
        return $this->getProperty("WebUrl");
    }
    /**
     *  A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select **Get link to team**. This URL should be treated as an opaque blob, and not parsed. 
     * @var string
     */
    public function setWebUrl($value)
    {
        $this->setProperty("WebUrl", $value, true);
    }
    /**
     * Whether this team is in read-only mode. 
     * @return bool
     */
    public function getIsArchived()
    {
        if (!$this->isPropertyAvailable("IsArchived")) {
            return null;
        }
        return $this->getProperty("IsArchived");
    }
    /**
     * Whether this team is in read-only mode. 
     * @var bool
     */
    public function setIsArchived($value)
    {
        $this->setProperty("IsArchived", $value, true);
    }
}