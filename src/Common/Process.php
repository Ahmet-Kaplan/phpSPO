<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00
 */
namespace Office365\Common;

use Office365\Runtime\ClientValue;
class Process extends ClientValue
{
    /**
     * @var string
     */
    public $AccountName;
    /**
     * @var string
     */
    public $CommandLine;
    /**
     * @var bool
     */
    public $IsElevated;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var integer
     */
    public $ParentProcessId;
    /**
     * @var string
     */
    public $ParentProcessName;
    /**
     * @var string
     */
    public $Path;
    /**
     * @var integer
     */
    public $ProcessId;
    /**
     * @var FileHash
     */
    public $FileHash;
}