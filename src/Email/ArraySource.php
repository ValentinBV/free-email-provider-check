<?php

namespace valentinbv\Email;

use valentinbv\Interfaces\ISource;

class ArraySource implements ISource
{
    /**
     * Array of domains
     * @var array
     */
    private $domainsArray = [];

    /**
     * @param array $domains array of domains
     */
    public function __construct(array $domains)
    {
        $this->domainsArray = $domains;
    }
    
    /**
     * Search domain in domains list
     * @param string $domainName
     * @return bool
     */
    public function find(string $domainName): bool
    {
        return in_array($domainName, $this->domainsArray);
    }

    /**
     * Get array of domains list
     * @return array
     */
    public function getDomains(): array
    {
        return $this->domainsArray;
    }
}