<?php
/**
 * Created by PhpStorm.
 * User: Bharat-Magecomp
 * Date: 5/14/2018
 * Time: 4:25 PM
 */

namespace Magecomp\Cookiecompliance\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Magecomp\Cookiecompliance\Helper\Data;


class Cookiecompliance extends Template
{
    protected $helper;

    /**
     * Cookiecompliance constructor.
     * @param Context $context
     * @param Data $helperData
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helperData,
        array $data = [] )
    {
        $this->helper = $helperData;
        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * @return mixed
     */
    public function isModuleEnabled()
    {
        return $this->helper->isModuleEnabled();
    }

    /**
     * @return mixed
     */
    public function getCookieText()
    {
        return $this->helper->getCookieText();
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInfoLink()
    {
        return $this->helper->getCookieMoreInfoLink();
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInfoText()
    {
        return $this->helper->getCookieMoreInfoText();
    }

    /**
     * @return mixed
     */
    public function getCookieCss()
    {
        return $this->helper->getCookieCss();
    }

    /**
     * @return mixed
     */
    public function getCookieHideText()
    {
        return $this->helper->getCookieHideText();
    }

    /**
     * @return mixed
     */
    public function getCookieHideTextLinnk()
    {
        return $this->helper->getCookieHideTextLinnk();
    }

    /**
     * @return mixed
     */
    public function getCookieBgColor()
    {
        return $this->helper->getCookieBgColor();
    }

    /**
     * @return mixed
     */
    public function getCookieTextColor()
    {
        return $this->helper->getCookieTextColor();
    }

    /**
     * @return mixed
     */
    public function getCookiePosition()
    {
        return $this->helper->getCookiePosition();
    }

    /**
     * @return mixed
     */
    public function getCookieFacebookCode()
    {
        return $this->helper->getCookieFacebookCode();
    }

    /**
     * @return mixed
     */
    public function getCookieAnalytics()
    {
        return $this->helper->getCookieAnalytics();
    }

    /**
     * @return mixed
     */
    public function getCookieFacebookEnable()
    {
        return $this->helper->getCookieFacebookEnable();
    }

    /**
     * @return mixed
     */
    public function getCookieAnalyticsEnable()
    {
        return $this->helper->getCookieAnalyticsEnable();
    }

    /**
     * @return mixed
     */
    public function getCookieAcceptcolor()
    {
        return $this->helper->getCookieAcceptcolor();
    }

    /**
     * @return mixed
     */
    public function getCookieAcceptBgColor()
    {
        return $this->helper->getCookieAcceptBgColor();
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInforLinkColor()
    {
        return $this->helper->getCookieMoreInforLinkColor();
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInforLinkTarget()
    {
        return $this->helper->getCookieMoreInforLinkTarget();
    }


}