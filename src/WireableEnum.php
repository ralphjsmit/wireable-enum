<?php

namespace RalphJSmit\WireableEnum;

trait WireableEnum
{
    public static function fromLivewire($value): static
    {
        return static::tryFrom($value);
    }

    public function toLivewire(): string
    {
        return $this->value;
    }
}
