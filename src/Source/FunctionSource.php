<?php

declare(strict_types=1);

namespace Poseidon\Type\Source;

/**
 * @psalm-immutable
 */
final class FunctionSource
{
    public function __construct(
        public readonly string $name,
    ) {
    }
}
