<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 */

declare(strict_types=1);

namespace CoreShop\Component\Customer\Repository;

use CoreShop\Component\Customer\Model\CustomerInterface;
use CoreShop\Component\Resource\Repository\PimcoreRepositoryInterface;

interface CustomerRepositoryInterface extends PimcoreRepositoryInterface
{
    public function findByNewsletterToken(string $newsletterToken): ?CustomerInterface;

    public function findUniqueByEmail(string $email, bool $isGuest): ?CustomerInterface;

    public function findGuestByEmail(string $email): ?CustomerInterface;

    public function findCustomerByEmail(string $email): ?CustomerInterface;
}
