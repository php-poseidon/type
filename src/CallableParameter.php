<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 */
final class CallableParameter
{
    public function __construct(
        public readonly Type $type = new MixedT(),
        public readonly bool $hasDefault = false,
        public readonly bool $variadic = false,
    ) {
    }
}
