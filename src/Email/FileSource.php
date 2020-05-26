<?php

namespace valentinbv\Email;

use valentinbv\Interfaces\ISource;

class FileSource implements ISource
{
    /**
     * Path to file with list of domains
     * @var string 
     */
    private $filePath = '';
   
    /**
     * Array of domains
     * @var array
     */
    private $domainsArray = [];

    /**
     * @param string $file path to file with list of domains
     */
    public function __construct(string $file)
    {
        $this->filePath = $file;
        if ($this->fileExists()) {
            $this->domainsArray = array_map('trim', file($this->filePath));
        }
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
     * Check file exists
     * @return bool
     */
    public function fileExists(): bool
    {
        return file_exists($this->filePath);
    }

    /**
     * Get path to file with domains list
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
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