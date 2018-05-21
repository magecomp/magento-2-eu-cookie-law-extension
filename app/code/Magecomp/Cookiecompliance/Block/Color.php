<?php
/**
 * Created by PhpStorm.
 * User: Bharat-Magecomp
 * Date: 5/16/2018
 * Time: 12:19 PM
 */

namespace Magecomp\Cookiecompliance\Block;


class Color extends \Magento\Config\Block\System\Config\Form\Field
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context, array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    protected function _getElementHtml( \Magento\Framework\Data\Form\Element\AbstractElement $element )
    {
        $html = $element->getElementHtml();
        $value = $element->getData('value');

        $html .= '<script type="text/javascript">
            require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
                $(document).ready(function () {
                	var $el = $("#' . $element->getHtmlId() . '");
                    $el.css("backgroundColor", "' . $value . '");
 
                	// Attach the color picker
                    $el.ColorPicker({
                    	color: "' . $value . '",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                    	}
                	});
            	});
        	});
	        </script>';
        return $html;
    }

}