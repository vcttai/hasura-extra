<?php
/*
 * (c) Minh Vuong <vuongxuongminh@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace Hasura\Metadata;

final class ReloadStateProcessor implements StateProcessorInterface
{
    public function __construct(private ManagerInterface $manager)
    {
    }

    public function process(bool $allowInconsistent = false): void
    {
        $this->manager->reload(true, true);
    }
}