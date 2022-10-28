<?php

declare(strict_types=1);

namespace Poseidon\Type;

/** @psalm-check-type-exact $_bool = bool */
$_bool = extractType(new BoolT());
