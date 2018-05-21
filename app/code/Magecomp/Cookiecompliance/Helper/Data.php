<?php

namespace Magecomp\Cookiecompliance\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{
    /* General Configuration*/
    const COOKIE_IS_ENABLED = 'cookiecompliance/cookiegroup/status';
    const COOKIE_COOKIETEXT = 'cookiecompliance/cookiegroup/cookietext';
    const COOKIE_COOKIEMOREINFO = 'cookiecompliance/cookiegroup/cookiemoreinfo';
    const COOKIE_COOKIEMOREINFOLINK = 'cookiecompliance/cookiegroup/cookiemoreinfolink';
    const COOKIE_HIDETEXT = 'cookiecompliance/cookiegroup/cookiehidetext';
    const COOKIE_MOREINFOLINKTARGET = 'cookiecompliance/cookiegroup/cookiemoreinfotarget';

    /* Style Configuration*/
    const COOKIE_MSG_BG_COLOR = 'cookiecompliance/cookiestyle/cookiemsgbgcolor';
    const COOKIE_TEXT_COLOR = 'cookiecompliance/cookiestyle/cookietextcolor';
    const COOKIE_COOKIECSS = 'cookiecompliance/cookiestyle/cookiecss';
    const COOKIE_POSITION = 'cookiecompliance/cookiestyle/cookieposition';
    const COOKIE_ACCEPTCOLOR = 'cookiecompliance/cookiestyle/cookieacceptcolor';
    const COOKIE_ACCEPTBGCOLOR = 'cookiecompliance/cookiestyle/cookieacceptbgcolor';
    const COOKIE_MOREINFOLINKCOLOR = 'cookiecompliance/cookiestyle/cookiemoreinfolinkcolor';

    /* Head Code Configuration*/
    const COOKIE_FACEBOOK = 'cookiecompliance/headcode/facebookcode';
    const COOKIE_GOOGLEANALYTICS = 'cookiecompliance/headcode/googleanalytics';
    const COOKIE_FACEBOOKENABLE = 'cookiecompliance/headcode/facbookpixelenale';
    const COOKIE_GOOGLEANALYTICSENABLE = 'cookiecompliance/headcode/analyticsenable';


    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * @return mixed
     */
    public function isModuleEnabled()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $isEnabled = $this->scopeConfig->getValue(self::COOKIE_IS_ENABLED, $storeScope);
        return $isEnabled;
    }

    /**
     * @return mixed
     */
    public function getCookieText()
    {

        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieText = $this->scopeConfig->getValue(self::COOKIE_COOKIETEXT, $storeScope);
        return $cookieText;
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInfoLink()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieMoreinfoLink = $this->scopeConfig->getValue(self::COOKIE_COOKIEMOREINFOLINK, $storeScope);
        return $cookieMoreinfoLink;
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInfoText()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieMoreinfoText = $this->scopeConfig->getValue(self::COOKIE_COOKIEMOREINFO, $storeScope);
        return $cookieMoreinfoText;
    }

    /**
     * @return mixed
     */
    public function getCookieCss()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieMoreinfoText = $this->scopeConfig->getValue(self::COOKIE_COOKIECSS, $storeScope);
        return $cookieMoreinfoText;
    }

    /**
     * @return mixed
     */
    public function getCookieHideText()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieMoreinfoText = $this->scopeConfig->getValue(self::COOKIE_HIDETEXT, $storeScope);
        return $cookieMoreinfoText;
    }

    /**
     * @return mixed
     */
    public function getCookieBgColor()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieBgColor = $this->scopeConfig->getValue(self::COOKIE_MSG_BG_COLOR, $storeScope);
        return $cookieBgColor;
    }

    /**
     * @return mixed
     */
    public function getCookieTextColor()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieTextColor = $this->scopeConfig->getValue(self::COOKIE_TEXT_COLOR, $storeScope);
        return $cookieTextColor;
    }

    /**
     * @return mixed
     */
    public function getCookiePosition()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookiePosition = $this->scopeConfig->getValue(self::COOKIE_POSITION, $storeScope);
        return $cookiePosition;
    }

    /**
     * @return mixed
     */
    public function getCookieFacebookCode()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieFacebookcode = $this->scopeConfig->getValue(self::COOKIE_FACEBOOK, $storeScope);
        return $cookieFacebookcode;
    }

    /**
     * @return mixed
     */
    public function getCookieFacebookEnable()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieFacebookcode = $this->scopeConfig->getValue(self::COOKIE_FACEBOOKENABLE, $storeScope);
        return $cookieFacebookcode;
    }

    /**
     * @return mixed
     */
    public function getCookieAnalytics()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieAnalyticscode = $this->scopeConfig->getValue(self::COOKIE_GOOGLEANALYTICS, $storeScope);
        return $cookieAnalyticscode;
    }

    /**
     * @return mixed
     */
    public function getCookieAnalyticsEnable()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieAnalyticscode = $this->scopeConfig->getValue(self::COOKIE_GOOGLEANALYTICSENABLE, $storeScope);
        return $cookieAnalyticscode;
    }

    /**
     * @return mixed
     */
    public function getCookieAcceptcolor()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieAcceptcolor = $this->scopeConfig->getValue(self::COOKIE_ACCEPTCOLOR, $storeScope);
        return $cookieAcceptcolor;
    }

    /**
     * @return mixed
     */
    public function getCookieAcceptBgColor()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieAcceptcolor = $this->scopeConfig->getValue(self::COOKIE_ACCEPTBGCOLOR, $storeScope);
        return $cookieAcceptcolor;
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInforLinkColor()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieMoreInfoLinkColor = $this->scopeConfig->getValue(self::COOKIE_MOREINFOLINKCOLOR, $storeScope);
        return $cookieMoreInfoLinkColor;
    }

    /**
     * @return mixed
     */
    public function getCookieMoreInforLinkTarget()
    {
        $storeScope = ScopeInterface::SCOPE_STORE;
        $cookieMoreInfoLinkTarget = $this->scopeConfig->getValue(self::COOKIE_MOREINFOLINKTARGET, $storeScope);
        return $cookieMoreInfoLinkTarget;
    }


}