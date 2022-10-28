<?php

declare(strict_types=1);

namespace Poseidon\Type;

/** @psalm-check-type-exact $_literalString = literal-string */
$_literalString = extractType(new LiteralStringT());
