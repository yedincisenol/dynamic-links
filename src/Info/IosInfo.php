<?php

namespace yedincisenol\DynamicLinks\Info;

class IosInfo implements \JsonSerializable
{
    private $iosBundleId;

    private $iosFallbackLink;

    private $iosCustomScheme;

    private $iosIpadFallbackLink;

    private $iosIpadBundleId;

    private $iosAppStoreId;

    /**
     * IosInfo constructor.
     * @param null $iosBundleId | The bundle ID of the iOS app to use to open the link. The app must be connected to your project from the Overview page of the Firebase console. Required for the Dynamic Link to open an iOS app.
     * @param null $iosFallbackLink | The link to open when the app isn't installed. Specify this to do something other than install your app from the App Store when the app isn't installed, such as open the mobile web version of the content, or display a promotional page for your app.
     * @param null $iosCustomScheme | Your app's custom URL scheme, if defined to be something other than your app's bundle ID
     * @param null $iosIpadFallbackLink | The link to open on iPads when the app isn't installed. Specify this to do something other than install your app from the App Store when the app isn't installed, such as open the web version of the content, or display a promotional page for your app.
     * @param null $iosIpadBundleId | The bundle ID of the iOS app to use on iPads to open the link. The app must be connected to your project from the Overview page of the Firebase console.
     * @param null $iosAppStoreId | Your app's App Store ID, used to send users to the App Store when the app isn't installed
     */
    public function __construct($iosBundleId = null, $iosFallbackLink = null, $iosCustomScheme = null,
                                $iosIpadFallbackLink = null, $iosIpadBundleId = null, $iosAppStoreId = null)
    {
        $this->setIosAppStoreId($iosAppStoreId);
        $this->setIosBundleId($iosBundleId);
        $this->setIosFallbackLink($iosFallbackLink);
        $this->setIosCustomScheme($iosCustomScheme);
        $this->setIosIpadFallbackLink($iosIpadFallbackLink);
        $this->setIosIpadBundleId($iosIpadBundleId);
    }

    /**
     * @param $iosAppStoreId
     * @return $this
     */
    public function setIosAppStoreId($iosAppStoreId)
    {
        $this->iosAppStoreId = $iosAppStoreId;

        return $this;
    }

    /**
     * @param $iosBundleId
     * @return $this
     */
    public function setIosBundleId($iosBundleId)
    {
        $this->iosBundleId = $iosBundleId;
        return $this;
    }

    /**
     * @param $iosCustomScheme
     * @return $this
     */
    public function setIosCustomScheme($iosCustomScheme)
    {
        $this->iosCustomScheme = $iosCustomScheme;
        return $this;
    }

    /**
     * @param $iosFallbackLink
     * @return $this
     */
    public function setIosFallbackLink($iosFallbackLink)
    {
        $this->iosFallbackLink = $iosFallbackLink;
        return $this;
    }

    /**
     * @param $iosIpadBundleId
     * @return $this
     */
    public function setIosIpadBundleId($iosIpadBundleId)
    {
        $this->iosIpadBundleId = $iosIpadBundleId;
        return $this;
    }

    /**
     * @param $iosIpadFallbackLink
     * @return $this
     */
    public function setIosIpadFallbackLink($iosIpadFallbackLink)
    {
        $this->iosIpadFallbackLink = $iosIpadFallbackLink;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getİosAppStoreId()
    {
        return $this->iosAppStoreId;
    }

    /**
     * @return mixed
     */
    public function getIosBundleId()
    {
        return $this->iosBundleId;
    }

    /**
     * @return mixed
     */
    public function getIosCustomScheme()
    {
        return $this->iosCustomScheme;
    }

    /**
     * @return mixed
     */
    public function getIosFallbackLink()
    {
        return $this->iosFallbackLink;
    }

    /**
     * @return mixed
     */
    public function getIosIpadBundleId()
    {
        return $this->iosIpadBundleId;
    }

    /**
     * @return mixed
     */
    public function getIosIpadFallbackLink()
    {
        return $this->iosIpadFallbackLink;
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