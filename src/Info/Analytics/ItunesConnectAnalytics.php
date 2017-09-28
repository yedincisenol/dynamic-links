<?php

namespace yedincisenol\DynamicLinks\Info\Analytics;

class ItunesConnectAnalytics implements \JsonSerializable
{
    private $at;

    private $ct;

    private $mt;

    private $pt;

    public function __construct($at = null, $ct = null, $mt = null, $pt = null)
    {
        $this->setAt($at);
        $this->setCt($ct);
        $this->setMt($mt);
        $this->setPt($pt);
    }


    /**
     * @param $at
     * @return $this
     */
    public function setAt($at)
    {
        $this->at = $at;
        return $this;
    }

    /**
     * @param $ct
     * @return $this
     */
    public function setCt($ct)
    {
        $this->ct = $ct;
        return $this;
    }

    /**
     * @param $mt
     * @return $this
     */
    public function setMt($mt)
    {
        $this->mt = $mt;
        return $this;
    }

    /**
     * @param $pt
     * @return $this
     */
    public function setPt($pt)
    {
        $this->pt = $pt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * @return mixed
     */
    public function getCt()
    {
        return $this->ct;
    }

    /**
     * @return mixed
     */
    public function getMt()
    {
        return $this->mt;
    }

    /**
     * @return mixed
     */
    public function getPt()
    {
        return $this->pt;
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