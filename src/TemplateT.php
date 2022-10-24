<?php

declare(strict_types=1);

namespace Poseidon\Type;

use Poseidon\Type\Source\ClassSource;
use Poseidon\Type\Source\FunctionSource;
use Poseidon\Type\Source\MethodSource;

/**
 * @psalm-immutable
 * @implements Type<mixed>
 */
final class TemplateT implements Type
{
    public function __construct(
        public readonly string $name,
        public readonly FunctionSource|ClassSource|MethodSource $source,
    ) {
    }
}
