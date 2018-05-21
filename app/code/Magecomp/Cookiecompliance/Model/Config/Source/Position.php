<?php
/**
 * Created by PhpStorm.
 * User: Bharat-Magecomp
 * Date: 5/16/2018
 * Time: 12:43 PM
 */

namespace Magecomp\Cookiecompliance\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Position implements ArrayInterface
{

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'top', 'label' => __('Top')],
            ['value' => 'bottom', 'label' => __('Bottom')],
        ];
    }
}