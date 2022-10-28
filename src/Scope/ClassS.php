<?php

declare(strict_types=1);

namespace Poseidon\Type\Scope;

/**
 * @psalm-immutable
 */
final class ClassS
{
    /**
     * @param class-string $class
     */
    public function __construct(
        public readonly string $class,
    ) {
    }
}
