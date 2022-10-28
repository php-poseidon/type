<?php

declare(strict_types=1);

namespace Poseidon\Type;

use Poseidon\Type\Scope\ClassS;
use Poseidon\Type\Scope\FunctionS;
use Poseidon\Type\Scope\MethodS;

/**
 * @psalm-immutable
 * @implements Type<mixed>
 */
final class TemplateT implements Type
{
    public function __construct(
        public readonly string $name,
        public readonly FunctionS|ClassS|MethodS $scope,
    ) {
    }
}
