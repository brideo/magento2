<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Search\Model\Autocomplete;

interface DataProviderInterface
{
    /**
     * @return ItemInterface[]
     */
    public function getItems();
}
