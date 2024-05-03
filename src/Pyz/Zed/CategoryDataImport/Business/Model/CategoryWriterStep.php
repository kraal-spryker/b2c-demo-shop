<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CategoryDataImport\Business\Model;

use Spryker\Zed\CategoryDataImport\Business\Model\CategoryWriterStep as SprykerCategoryWriterStep;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CategoryWriterStep extends SprykerCategoryWriterStep
{
    /**
     * @var string
     */
    public const KEY_CATEGORY_IMAGE_NAME = 'category_image_name';

    public function anyName()
    {
        $sum = 0;
        $array = [1, 2, 3, 4, 5];
        foreach ($array as $item) {
            $sum+= $item;
        }
        return $sum;
    }
}
