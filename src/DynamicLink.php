<?php

namespace yedincisenol\DynamicLinks;

class DynamicLink implements \JsonSerializable
{
    private $dynamicLinkDomain = null;

    private $link;

    private $androidInfo  = null;

    private $iosInfo  = null;

    private $navigationInfo  = null;

    private $analyticsInfo  = null;

    private $socialMetaTagInfo  = null;

    /**
     * DynamicLink constructor.
     * @param null $link | 	Required if you didn't set a value for the longDynamicLink parameter.
    The link your app will open. You can specify a URL that your app can handle, typically an app's content/payload, which can initiate app-specific logic (such as crediting the user with a coupon or displaying a welcome screen). This link must be a well-formatted URL, be properly URL-encoded, use the HTTP or HTTPS, and not another Dynamic Link. scheme.
     * @param null $androidInfo
     * @param null $iosInfo
     * @param boolean $enforceRedirectUpdate
     * @param null $analyticsInfo
     * @param null $socialMediaTagInfo

    Set the parameter to { "option": "SHORT" } to generate path strings that are only as long as needed to be unique, with a minimum length of 4 characters. Use this method if sensitive information would not be exposed if a short Dynamic Link URL were guessed.

    Omit this parameter or set the parameter to { "option": "UNGUESSABLE" } to shorten the path to an unguessable string. Such strings are created by base62-encoding randomly generated 96-bit numbers, and consist of 17 alphanumeric characters. Use unguessable strings to prevent your Dynamic Links from being crawled, which can potentially expose sensitive information.
     */
    public function __construct($link, $androidInfo = null, $iosInfo = null,
                                $enforceRedirectUpdate = false, $analyticsInfo = null, $socialMediaTagInfo = null)
    {
        $this->setLink($link);
        $this->setAndroidInfo($androidInfo);
        $this->setIosInfo($iosInfo);
        $this->setNavigationInfo($enforceRedirectUpdate);
        $this->setAnalyticsInfo($analyticsInfo);
        $this->setSocialMetaTagInfo($socialMediaTagInfo);
    }

    /**
     * @param AnalyticsInfo $analyticsInfo
     */
    public function setAnalyticsInfo($analyticsInfo)
    {
        $this->analyticsInfo = $analyticsInfo;
    }

    /**
     * @param mixed $android_info
     */
    public function setAndroidInfo($android_info)
    {
        $this->androidInfo = $android_info;
    }

    /**
     * @param mixed $dynamic_link_domain
     */
    public function setDynamicLinkDomain($dynamic_link_domain)
    {
        $this->dynamicLinkDomain = $dynamic_link_domain;
    }

    /**
     * @param mixed $ios_info
     */
    public function setIosInfo($ios_info)
    {
        $this->iosInfo = $ios_info;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @param int $enableForcedRedirect | If set to '1', skip the app preview page when the Dynamic Link is opened, and instead redirect to the app or store. The app preview page (enabled by default) can more reliably send users to the most appropriate destination when they open Dynamic Links in apps; however, if you expect a Dynamic Link to be opened only in apps that can open Dynamic Links reliably without this page, you can disable it with this parameter. Note: the app preview page is only shown on iOS currently, but may eventually be shown on Android. This parameter will affect the behavior of the Dynamic Link on both platforms.

     */
    public function setNavigationInfo($enableForcedRedirect = 0)
    {
        $this->navigationInfo['enableForcedRedirect'] = $enableForcedRedirect;
    }

    /**
     * @param mixed $social_meta_tag_info
     */
    public function setSocialMetaTagInfo($social_meta_tag_info)
    {
        $this->socialMetaTagInfo = $social_meta_tag_info;
    }

    /**
     * @return mixed
     */
    public function getAnalyticsInfo()
    {
        return $this->analyticsInfo;
    }

    /**
     * @return mixed
     */
    public function getAndroidInfo()
    {
        return $this->androidInfo;
    }

    /**
     * @return mixed
     */
    public function getDynamicLinkDomain()
    {
        return $this->dynamicLinkDomain;
    }

    /**
     * @return mixed
     */
    public function getIosInfo()
    {
        return $this->iosInfo;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getNavigationInfo()
    {
        return $this->navigationInfo;
    }

    /**
     * @return mixed
     */
    public function getSocialMetaTagInfo()
    {
        return $this->socialMetaTagInfo;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}