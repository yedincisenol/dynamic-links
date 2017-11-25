<?php

namespace yedincisenol\DynamicLinks\Info;

use yedincisenol\DynamicLinks\Info\Analytics\GooglePlayAnalytics;
use yedincisenol\DynamicLinks\Info\Analytics\ItunesConnectAnalytics;

class AnalyticsInfo implements \JsonSerializable
{
    private $googlePlayAnalytics;

    private $itunesConnectAnalytics;

    public function __construct(GooglePlayAnalytics $googlePlayAnalytics, ItunesConnectAnalytics $itunesConnectAnalytics)
    {
        $this->setGooglePlayAnalytics($googlePlayAnalytics);
        $this->setItunesConnectAnalytics($itunesConnectAnalytics);
    }

    /**
     * @param $googlePlayAnalytics
     * @return $this
     */
    public function setGooglePlayAnalytics($googlePlayAnalytics)
    {
        $this->googlePlayAnalytics = $googlePlayAnalytics;
        return $this;
    }

    /**
     * @param $itunesConnectAnalytics
     * @return $this
     */
    public function setItunesConnectAnalytics($itunesConnectAnalytics)
    {
        $this->itunesConnectAnalytics = $itunesConnectAnalytics;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGooglePlayAnalytics()
    {
        return $this->googlePlayAnalytics;
    }

    /**
     * @return mixed
     */
    public function getItunesConnectAnalytics()
    {
        return $this->itunesConnectAnalytics;
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