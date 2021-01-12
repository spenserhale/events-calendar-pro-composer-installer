<?php

namespace spenserhale\EventsCalendarProComposerInstaller;

use Composer\Plugin\PreFileDownloadEvent;

final class Plugin extends \FFraenz\PrivateComposerInstaller\Plugin
{
    /**
     * Gravity Forms Plugin API endpoint.
     */
    private const URL = 'https://pue.tri.be/api/';

    /**
     * Fulfill package URL placeholders before downloading the package.
     * @param PreFileDownloadEvent $event
     */
    public function handlePreDownloadEvent(PreFileDownloadEvent $event): void
    {
        $url = $event->getProcessedUrl();

        if(strpos($url, self::URL) === false) {
            return;
        }

        parent::handlePreDownloadEvent($event);
    }
}
