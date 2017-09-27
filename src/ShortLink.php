<?php

namespace yedincisenol\DynamicLinks;

class ShortLink
{
    private $shortLink;
    private $previewLink;
    private $warnings = [];

    public function __construct($shortLink, $previewLink, $warnings = null)
    {
        $this->setPreviewLink($previewLink);
        $this->setShortLink($shortLink);
        $this->setWarnings($warnings);
    }

    /**
     * @param mixed $previewLink
     */
    public function setPreviewLink($previewLink)
    {
        $this->previewLink = $previewLink;
    }

    /**
     * @param mixed $shortLink
     */
    public function setShortLink($shortLink)
    {
        $this->shortLink = $shortLink;
    }

    /**
     * @param array $warnings
     */
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }

    /**
     * @return mixed
     */
    public function getPreviewLink()
    {
        return $this->previewLink;
    }

    /**
     * @return mixed
     */
    public function getShortLink()
    {
        return $this->shortLink;
    }

    /**
     * @return array
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}