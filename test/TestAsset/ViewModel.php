<?php

declare(strict_types=1);

namespace MezzioTest\Template\TestAsset;

class ViewModel
{
    private array $variables;

    public function __construct(array $variables)
    {
        $this->variables = $variables;
    }

    public function getVariables(): array
    {
        return $this->variables;
    }
}
