<?php

namespace RalphJSmit\WireableEnum;

trait WireableEnum
{
    public function fromLivewire($value): static
    {
        return static::tryFrom($value);
    }

    public function toLivewire(): string
    {
        return $this->value;
    }
}
