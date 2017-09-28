<?php

require_once __DIR__ . '/vendor/autoload.php';

use yedincisenol\DynamicLinks\Info\Analytics\GooglePlayAnalytics;
use yedincisenol\DynamicLinks\Info\Analytics\ItunesConnectAnalytics;
use yedincisenol\DynamicLinks\Info\AnalyticsInfo;
use yedincisenol\DynamicLinks\DynamicLink;
use yedincisenol\DynamicLinks\Info\AndroidInfo;
use yedincisenol\DynamicLinks\Info\SocialMetaTag;
use yedincisenol\DynamicLinks\Info\IosInfo;

$apiKey             = 'AIzaSyBimuzHmQKpSV2TkQTJnwtodfciaFY8XpE';
$dynamicLinkDomain  = 'rcw3r.app.goo.gl';
$longLink           = 'https://rcw3r.app.goo.gl/?link=https://example.com/&apn=com.example.android&ibi=com.example.ios';

$dynamicLink = new yedincisenol\DynamicLinks\DynamicLinks([
    'api_key'               =>  $apiKey,
    'dynamic_link_domain'   =>  $dynamicLinkDomain
]);

// ****** //
//Create new short link from Simple Data
$link = new yedincisenol\DynamicLinks\DynamicLink('http://yeni.co/');
##$shortLink = $dynamicLink->create($link, 'UNGUESSABLE');


// ****** //
//Create new shortlink from Advanced Data
$androidInfo = new AndroidInfo('co.yeni.dynamiclinks', 'fallbacklink', '15', 'http://play.google.com/apps/yenico');
$iosInfo     = new IosInfo('co.yeni.dynamiclinks', 'http://yeni.co/', null, 'http://yeni.co', 'bundleid', 'storeid');
$analyticsInfo = new AnalyticsInfo(
    new GooglePlayAnalytics('gclid', 'utm', 'utmterm', 'utmcampaign', 'utmmedium', 'utmsorce'),
    new ItunesConnectAnalytics('at', 'ct', 'mt', 'pt')
);
$socialMediaTag = new SocialMetaTag('title', 'description', 'http://yeni.co/preview-image.jpg');

$link = new DynamicLink('http://yeni.co/post?id=15&ref=at#detail', $androidInfo, $iosInfo, true, $analyticsInfo, $socialMediaTag);
$shortLink = $dynamicLink->create($link, 'SHORT');
// ****** //
//Create new shortlink from Long Link
//$shortLink = $dynamicLink->shorten($longLink);

print_r($shortLink);