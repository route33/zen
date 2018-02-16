<?php
namespace WoohooLabs\Zen\Tests\Unit\Fixture\Container;

use WoohooLabs\Zen\AbstractCompiledContainer;

class ContainerWithEntry extends AbstractCompiledContainer
{
    /**
     * @var string[]
     */
    protected static $entryPoints = [
        \WoohooLabs\Zen\Tests\Unit\Fixture\Container\ContainerWithEntry::class => 'WoohooLabs__Zen__Tests__Unit__Fixture__Container__ContainerWithEntry',
        \Psr\Container\ContainerInterface::class => 'Psr__Container__ContainerInterface',
    ];

    /**
     * @var string
     */
    protected $rootDirectory;

    public function __construct(string $rootDirectory = '')
    {
        $this->rootDirectory = $rootDirectory;
    }

    public function WoohooLabs__Zen__Tests__Unit__Double__StubDefinition()
    {
        // This is a dummy definition.
    }
}
