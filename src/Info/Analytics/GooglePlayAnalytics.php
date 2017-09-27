<?php

namespace yedincisenol\DynamicLinks\Info\Analytics;

class GooglePlayAnalytics implements \JsonSerializable
{

    private $utmSource;

    private $utmMedium;

    private $utmCampaign;

    private $utmTerm;

    private $utmContent;

    private $gclid;

    /**
     * GooglePlayAnalytics constructor.
     * @param null $gclid
     * @param null $utmContent
     * @param null $utmTerm
     * @param null $utmCampaign
     * @param null $utmMedium
     * @param null $utmSource
     */
    public function __construct($gclid = null, $utmContent = null, $utmTerm = null,
                                $utmCampaign = null, $utmMedium = null, $utmSource = null )
    {
        $this->setGclid($gclid);
        $this->setUtmCampaign($utmCampaign);
        $this->setUtmContent($utmContent);
        $this->setUtmMedium($utmMedium);
        $this->setUtmSource($utmSource);
        $this->setUtmTerm($utmTerm);
    }

    /**
     * @param mixed $gclid
     */
    public function setGclid($gclid)
    {
        $this->gclid = $gclid;
    }

    /**
     * @param mixed $utmCampaign
     */
    public function setUtmCampaign($utmCampaign)
    {
        $this->utmCampaign = $utmCampaign;
    }

    /**
     * @param mixed $utmContent
     */
    public function setUtmContent($utmContent)
    {
        $this->utmContent = $utmContent;
    }

    /**
     * @param mixed $utmMedium
     */
    public function setUtmMedium($utmMedium)
    {
        $this->utmMedium = $utmMedium;
    }

    /**
     * @param mixed $utmSource
     */
    public function setUtmSource($utmSource)
    {
        $this->utmSource = $utmSource;
    }

    /**
     * @param mixed $utmTerm
     */
    public function setUtmTerm($utmTerm)
    {
        $this->utmTerm = $utmTerm;
    }

    /**
     * @return mixed
     */
    public function getGclid()
    {
        return $this->gclid;
    }

    /**
     * @return mixed
     */
    public function getUtmCampaign()
    {
        return $this->utmCampaign;
    }

    /**
     * @return mixed
     */
    public function getUtmContent()
    {
        return $this->utmContent;
    }

    /**
     * @return mixed
     */
    public function getUtmMedium()
    {
        return $this->utmMedium;
    }

    /**
     * @return mixed
     */
    public function getUtmSource()
    {
        return $this->utmSource;
    }

    /**
     * @return mixed
     */
    public function getUtmTerm()
    {
        return $this->utmTerm;
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