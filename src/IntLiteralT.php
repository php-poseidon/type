<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TInt of int
 * @implements Type<TInt>
 */
final class IntLiteralT implements Type
{
    /**
     * @param TInt $value
     */
    public function __construct(
        public readonly int $value,
    ) {
    }
}
