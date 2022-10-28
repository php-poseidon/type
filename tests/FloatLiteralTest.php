<?php

declare(strict_types=1);

namespace Poseidon\Type;

/** @psalm-check-type-exact $_floatLiteral = 3.5 */
$_floatLiteral = extractType(new FloatLiteralT(3.5));

/** @psalm-check-type-exact $_negativeFloatLiteral = -1.222 */
$_negativeFloatLiteral = extractType(new FloatLiteralT(-1.222));

/** @psalm-check-type-exact $_genericFloat = float */
$_genericFloat = extractType(new FloatLiteralT(array_sum([1, 2])));
