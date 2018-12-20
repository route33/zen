<?php
declare(strict_types=1);

namespace WoohooLabs\Zen\Config;

use WoohooLabs\Zen\Config\Autoload\AutoloadConfig;
use WoohooLabs\Zen\Config\Autoload\AutoloadConfigInterface;
use function str_replace;

abstract class AbstractCompilerConfig
{
    abstract public function getContainerNamespace(): string;

    abstract public function getContainerClassName(): string;

    abstract public function useConstructorInjection(): bool;

    abstract public function usePropertyInjection(): bool;

    public function getAutoloadConfig(): AutoloadConfigInterface
    {
        return AutoloadConfig::disabledGlobally();
    }

    /**
     * @return AbstractContainerConfig[]
     * @internal
     */
    abstract public function getContainerConfigs(): array;

    /**
     * @internal
     */
    public function getContainerHash(): string
    {
        return str_replace("\\", "__", $this->getContainerFqcn());
    }

    /**
     * @internal
     */
    public function getContainerFqcn(): string
    {
        $namespace = $this->getContainerNamespace() ? $this->getContainerNamespace() . "\\" : "";

        return $namespace . $this->getContainerClassName();
    }
}
