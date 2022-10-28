<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template TString of literal-string
 * @implements Type<TString>
 */
final class StringLiteralT implements Type
{
    /**
     * @param TString $value
     */
    public function __construct(
        public readonly string $value,
    ) {
    }
}
