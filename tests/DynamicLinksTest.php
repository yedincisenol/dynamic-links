<?php

use PHPUnit\Framework\TestCase;
use yedincisenol\DynamicLinks\ShortLink;
use yedincisenol\DynamicLinks\DynamicLink;
use yedincisenol\DynamicLinks\DynamicLinks;

class DynamicLinksTest extends TestCase
{

    private $apiKey             = 'AIzaSyBimuzHmQKpSV2TkQTJnwtodfciaFY8XpE';
    private $dynamicLinkDomain  = 'rcw3r.app.goo.gl';
    private $longLink           = 'https://rcw3r.app.goo.gl/?link=https://example.com/&apn=com.example.android&ibi=com.example.ios';
    private $dynamicLink        =  null;

    public function setUp()
    {

        $this->dynamicLink = new DynamicLinks([
            'api_key'               =>  $this->apiKey,
            'dynamic_link_domain'   =>  $this->dynamicLinkDomain
        ]);
    }

    /**
     * Test create shortlink from Data
     */
    public function testCreateShortLinkWithDataReturnsShortLink()
    {
        //Create new short
        $link = new DynamicLink('http://yeni.co/portfolyo?id=15&ref=at#detail');
        $this->assertInstanceOf(ShortLink::class, $this->dynamicLink->create($link));
    }

    /**
     * Test create shortlink from LongLink
     */
    public function testCreateShortLinkWithLongLinkReturnsShortLink()
    {
        $link = $this->dynamicLink->shorten($this->longLink);
        $this->assertInstanceOf(ShortLink::class, $link);
    }
}