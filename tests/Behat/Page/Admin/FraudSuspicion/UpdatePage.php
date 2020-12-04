<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face...start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace Tests\BitBag\SyliusBlacklistPlugin\Behat\Page\Admin\FraudSuspicion;

use Sylius\Behat\Page\Admin\Crud\UpdatePage as BaseUpdatePage;
use Tests\BitBag\SyliusBlacklistPlugin\Behat\Behaviour\ChecksCodeImmutabilityTrait;

class UpdatePage extends BaseUpdatePage implements UpdatePageInterface
{
    use ChecksCodeImmutabilityTrait;

    public function fillStreet(string $street): void
    {
        $this->getDocument()->fillField('Street', $street);
    }

    public function fillCity(string $city): void
    {
        $this->getDocument()->fillField('City', $city);
    }
}
