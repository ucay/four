<?php

declare(strict_types=1);

namespace Bolt\Entity;

use Tightenco\Collect\Support\Collection;

/**
 * @see \Bolt\Entity\Content
 */
trait ContentLocalizeTrait
{
    public function getLocales(): Collection
    {
        $locales = $this->getDefinition()->get('locales');

        if (empty($locales)) {
            return new Collection(['']);
        }

        return $locales;
    }

    public function getDefaultLocale(): string
    {
        return (string) $this->getLocales()->first();
    }
}
