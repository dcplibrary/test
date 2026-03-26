<?php

namespace Dcplibrary\Test;

class Test
{
    /**
     * Package configuration.
     *
     * @var array<string, mixed>
     */
    protected array $config;

    /**
     * Create a new Test instance.
     *
     * @param array<string, mixed> $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Get the package version.
     */
    public function version(): string
    {
        return '1.0.0';
    }

    /**
     * Get the package name.
     */
    public function name(): string
    {
        return 'test';
    }
}
