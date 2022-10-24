<?php

declare(strict_types=1);

namespace Poseidon\Type;

use Poseidon\Type\Source\ClassSource;

/**
 * @psalm-immutable
 * @template T of object
 * @implements Type<T>
 */
final class StaticT implements Type
{
    public function __construct(
        public readonly ClassSource $source,
    ) {
    }
}
