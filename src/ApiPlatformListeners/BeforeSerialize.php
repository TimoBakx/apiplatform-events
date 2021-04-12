<?php
declare(strict_types=1);

namespace TimoBakx\ApiEventsBundle\ApiPlatformListeners;

use Symfony\Component\HttpKernel\Event\ViewEvent;

interface BeforeSerialize
{
    public function __invoke(ViewEvent $event): void;
}
