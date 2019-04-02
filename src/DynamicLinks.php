<?php

namespace yedincisenol\DynamicLinks;

use GuzzleHttp\Client;
use yedincisenol\DynamicLinks\Exception\ApikeyException;
use yedincisenol\DynamicLinks\Exception\ConfigException;
use yedincisenol\DynamicLinks\Exception\InvalidArgumentException;

class DynamicLinks
{
    /**
     * DynamicLinks Config
     * @var array|mixed|null
     */
    private $config;

    /**
     * DynamicLinks constructor.
     * @param array|null $config
     * @throws ConfigException
     */
    public function __construct(array $config = null)
    {
        if ($config == null && function_exists('config')) {
            $config = config('dynamiclinks');
        }

        if ($config == null || !isset($config['api_key']) || strlen($config['api_key']) < 1) {
            throw new ConfigException;
        }

        $this->config   = $config;
        $this->client   =   new Client([
            'base_uri' => 'https://firebasedynamiclinks.googleapis.com/v1/shortLinks?key=' . $config['api_key']
        ]);
    }

    /**
     * Short a long dynamic link
     * @param $longLink
     * @return ShortLink
     * @throws ApikeyException
     * @throws InvalidArgumentException
     * @throws \Exception
     */
    public function shorten($longLink)
    {

        try
        {
            $request = $this->client->post('', [
                'body' => json_encode([
                    'longDynamicLink' => $longLink,
                ])
            ]);

        } catch (\Exception $e){
            switch ($e->getCode()) {
                case 403:
                    throw new ApikeyException($e->getMessage());
                    break;
                case 400:
                    throw new InvalidArgumentException($e->getMessage());
                default:
                    throw new \Exception($e->getMessage());
            }
        }

        $json = json_decode($request->getBody(), true);

        return new ShortLink($json['shortLink'], $json['previewLink'], @$json['warning']);
    }

    /**
     * Create new dynamic link
     * @param DynamicLink $dynamicLink
     * @param string $suffix
     * @param null $dynamicLinkDomain
     * @return ShortLink
     * @throws ApikeyException
     * @throws InvalidArgumentException
     * @throws \Exception
     */
    public function create(DynamicLink $dynamicLink, $suffix = 'SHORT', $dynamicLinkDomain = null)
    {
        if ($dynamicLinkDomain == null) {
            $dynamicLinkDomain = $this->config['dynamic_link_domain'];
        }

        $dynamicLink->setDynamicLinkDomain($dynamicLinkDomain);
        $dynamicLink->setDomainUriPrefix($dynamicLinkDomain);

        try
        {
            $requestData = json_encode([
                'dynamicLinkInfo' => $dynamicLink,
                'suffix' => ['option' => $suffix]
            ]);

            $request = $this->client->request('POST', '', [
                'body' => $requestData
            ]);

        } catch (\Exception $e){
            switch ($e->getCode()) {
                case 403:
                    throw new ApikeyException($e->getMessage());
                    break;
                case 400:
                    throw new InvalidArgumentException($e->getMessage());
                default:
                    throw new \Exception($e->getMessage());
            }
        }

        $json = json_decode($request->getBody(), true);

        return new ShortLink($json['shortLink'], $json['previewLink'], @$json['warning']);

    }

}