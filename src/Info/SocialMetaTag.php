<?php

namespace yedincisenol\DynamicLinks\Info;

class SocialMetaTag implements \JsonSerializable
{
    private $socialTitle;

    private $socialDescription;

    private $socialImageLink;

    /**
     * SocialMetaTag constructor.
     * @param null $socialTitle | The title to use when the Dynamic Link is shared in a social post.
     * @param null $socialDescription | The description to use when the Dynamic Link is shared in a social post.
     * @param null $socialImageLink | The URL to an image related to this link.
     */
    public function __construct($socialTitle = null, $socialDescription = null, $socialImageLink = null)
    {
        $this->setSocialTitle($socialTitle);
        $this->setSocialDescription($socialDescription);
        $this->setSocialImageLink($socialImageLink);
    }

    /**
     * @param $socialDescription
     * @return $this
     */
    public function setSocialDescription($socialDescription)
    {
        $this->socialDescription = $socialDescription;

        return $this;
    }

    /**
     * @param $socialImageLink
     * @return $this
     */
    public function setSocialImageLink($socialImageLink)
    {
        $this->socialImageLink = $socialImageLink;
        return $this;
    }

    /**
     * @param $socialTitle
     * @return $this
     */
    public function setSocialTitle($socialTitle)
    {
        $this->socialTitle = $socialTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSocialDescription()
    {
        return $this->socialDescription;
    }

    /**
     * @return mixed
     */
    public function getSocialImageLink()
    {
        return $this->socialImageLink;
    }

    /**
     * @return mixed
     */
    public function getSocialTitle()
    {
        return $this->socialTitle;
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