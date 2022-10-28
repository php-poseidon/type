<?php

declare(strict_types=1);

namespace Poseidon\Type\Scope;

/**
 * @psalm-immutable
 */
final class FunctionS
{
    /**
     * @param callable-string $function
     */
    public function __construct(
        public readonly string $function,
    ) {
    }
}
