<?php

declare(strict_types=1);

namespace Poseidon\Type\Scope;

/**
 * @psalm-immutable
 */
final class MethodS
{
    /**
     * @param class-string $class
     */
    public function __construct(
        public readonly string $class,
        public readonly string $method,
    ) {
    }
}
