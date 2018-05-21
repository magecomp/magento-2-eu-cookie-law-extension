<?php
/**
 * Created by PhpStorm.
 * User: Bharat-Magecomp
 * Date: 5/17/2018
 * Time: 11:03 AM
 */

namespace Magecomp\Cookiecompliance\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Target implements ArrayInterface
{

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value' => '_blank', 'label' => __('Blank')],
            ['value' => '_parent', 'label' => __('Parent')],
            ['value' => '_self', 'label' => __('Self')],
            ['value' => '_top', 'label' => __('Top')],
        ];
    }
}