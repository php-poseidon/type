<?php

declare(strict_types=1);

namespace Poseidon\Type\Source;

/**
 * @psalm-immutable
 */
final class MethodSource
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
