<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TFloat of float
 * @implements Type<TFloat>
 */
final class FloatLiteralT implements Type
{
    /**
     * @param TFloat $value
     */
    public function __construct(
        public readonly float $value,
    ) {
    }
}
