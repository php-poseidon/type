<?php

declare(strict_types=1);

namespace Poseidon\Type;

/**
 * @psalm-immutable
 * @template T
 * @extends Type<T>
 */
interface TypeAlias extends Type
{
    /**
     * @return Type<T>
     */
    public function type(): Type;
}
