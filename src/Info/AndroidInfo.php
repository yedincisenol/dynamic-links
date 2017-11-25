<?php

namespace yedincisenol\DynamicLinks\Info;

class AndroidInfo implements \JsonSerializable
{
    private $androidPackageName;

    private $androidFallbackLink;

    private $androidMinPackageVersionCode;

    private $androidLink;

    /**
     * AndroidInfo constructor.
     * @param null $androidPackageName | The package name of the Android app to use to open the link. The app must be connected to your project from the Overview page of the Firebase console. Required for the Dynamic Link to open an Android app.

     * @param null $androidFallbackLink | The link to open when the app isn't installed. Specify this to do something other than install your app from the Play Store when the app isn't installed, such as open the mobile web version of the content, or display a promotional page for your app.

     * @param null $androidMinPackageVersionCode |The versionCode of the minimum version of your app that can open the link. If the installed app is an older version, the user is taken to the Play Store to upgrade the app.

     * @param null $androidLink
     */
    public function __construct($androidPackageName = null, $androidFallbackLink = null,
                                $androidMinPackageVersionCode = null,  $androidLink = null )
    {
        $this->setAndroidFallbackLink($androidFallbackLink);

        $this->setAndroidLink($androidLink);

        $this->setAndroidMinPackageVersionCode($androidMinPackageVersionCode);

        $this->setAndroidPackageName($androidPackageName);

    }

    /**
     * @param $androidFallbackLink
     * @return $this
     */
    public function setAndroidFallbackLink($androidFallbackLink)
    {
        $this->androidFallbackLink = $androidFallbackLink;
        return $this;
    }

    /**
     * @param $androidLink
     * @return $this
     */
    public function setAndroidLink($androidLink)
    {
        $this->androidLink = $androidLink;
        return $this;
    }

    /**
     * @param $androidMinPackageVersionCode
     * @return $this
     */
    public function setAndroidMinPackageVersionCode($androidMinPackageVersionCode)
    {
        $this->androidMinPackageVersionCode = $androidMinPackageVersionCode;
        return $this;
    }

    /**
     * @param $androidPackageName
     * @return $this
     */
    public function setAndroidPackageName($androidPackageName)
    {
        $this->androidPackageName = $androidPackageName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAndroidFallbackLink()
    {
        return $this->androidFallbackLink;
    }

    /**
     * @return mixed
     */
    public function getAndroidLink()
    {
        return $this->androidLink;
    }

    /**
     * @return mixed
     */
    public function getAndroidMinPackageVersionCode()
    {
        return $this->androidMinPackageVersionCode;
    }

    /**
     * @return mixed
     */
    public function getAndroidPackageName()
    {
        return $this->androidPackageName;
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