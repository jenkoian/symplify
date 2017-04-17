<?php declare(strict_types=1);

namespace Symplify\Statie\Contract\Latte;

interface MutableContentLoaderInterface
{
    public function changeContent(string $name, string $content): void;
}
