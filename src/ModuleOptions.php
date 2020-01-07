<?php

namespace ZfcTwig;

use Laminas\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $environmentLoader = '';

    /**
     * @var string
     */
    protected $environmentClass = '';

    /**
     * @var array
     */
    protected $environmentOptions = [];

    /**
     * @var array
     */
    protected $globals = [];

    /**
     * @var array
     */
    protected $loaderChain = [];

    /**
     * @var array
     */
    protected $extensions = [];

    /**
     * @var string
     */
    protected $suffix = '';

    /**
     * @var bool
     */
    protected $enableFallbackFunctions = true;

    /**
     * @var bool
     */
    protected $disableZfmodel = true;

    /**
     * @var array
     */
    protected $helperManager = [];

    /**
     * @param boolean $disableZfmodel
     * @return $this
     */
    public function setDisableZfmodel(bool $disableZfmodel): self
    {
        $this->disableZfmodel = $disableZfmodel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableZfmodel(): bool
    {
        return $this->disableZfmodel;
    }

    /**
     * @param boolean $enableFallbackFunctions
     * @return $this
     */
    public function setEnableFallbackFunctions(bool $enableFallbackFunctions): self
    {
        $this->enableFallbackFunctions = $enableFallbackFunctions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableFallbackFunctions(): bool
    {
        return $this->enableFallbackFunctions;
    }

    /**
     * @param string $environmentLoader
     * @return $this
     */
    public function setEnvironmentLoader(string $environmentLoader): self
    {
        $this->environmentLoader = $environmentLoader;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironmentLoader(): string
    {
        return $this->environmentLoader;
    }

    /**
     * @param array $environmentOptions
     * @return $this
     */
    public function setEnvironmentOptions(array $environmentOptions): self
    {
        $this->environmentOptions = $environmentOptions;
        return $this;
    }

    /**
     * @return array
     */
    public function getEnvironmentOptions(): array
    {
        return $this->environmentOptions;
    }

    /**
     * @param array $extensions
     * @return $this
     */
    public function setExtensions($extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtensions(): array
    {
        return $this->extensions;
    }

    /**
     * @param array $helperManager
     * @return $this
     */
    public function setHelperManager($helperManager): self
    {
        $this->helperManager = $helperManager;
        return $this;
    }

    /**
     * @return array
     */
    public function getHelperManager(): array
    {
        return $this->helperManager;
    }

    /**
     * @param array $loaderChain
     * @return $this
     */
    public function setLoaderChain(array $loaderChain): self
    {
        $this->loaderChain = $loaderChain;
        return $this;
    }

    /**
     * @return array
     */
    public function getLoaderChain(): array
    {
        return $this->loaderChain;
    }

    /**
     * @param string $suffix
     * @return $this
     */
    public function setSuffix(string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuffix(): string
    {
        return $this->suffix;
    }

    /**
     * @param string $environmentClass
     */
    public function setEnvironmentClass(string $environmentClass)
    {
        $this->environmentClass = $environmentClass;
    }

    /**
     * @return string
     */
    public function getEnvironmentClass(): string
    {
        return $this->environmentClass;
    }

    /**
     * @param array $globals
     */
    public function setGlobals(array $globals)
    {
        $this->globals = $globals;
    }

    /**
     * @return array
     */
    public function getGlobals(): array
    {
        return $this->globals;
    }

}
