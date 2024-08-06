<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusBlacklistPlugin\Checker\AutomaticBlacklistingRule;

use BitBag\SyliusBlacklistPlugin\Entity\FraudPrevention\AutomaticBlacklistingRuleInterface;
use BitBag\SyliusBlacklistPlugin\Repository\OrderRepositoryInterface;
use Sylius\Component\Order\Model\OrderInterface;

interface AutomaticBlacklistingRuleCheckerInterface
{
    public function isBlacklistedOrderAndCustomer(
        AutomaticBlacklistingRuleInterface $blacklistingRule,
        OrderInterface $order,
        OrderRepositoryInterface $orderRepository,
    ): bool;

    public function getType(): string;
}
