<?php

namespace gg\WhiteListApiBundle\Extension\Rest;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class RestClient
{
    /**
     * @var HttpClient
     */
    protected $httpClient;

    /** @var string */
    protected $baseUrl;

    public function __construct(
        string $baseUrl
    ) {
        $this->httpClient = HttpClient::create();
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $options
     * @return ResponseInterface
     * @throws TransportExceptionInterface
     */
    public function doRequest(
        string $url,
        string $method = Request::METHOD_GET,
        array $options = []
    ): ResponseInterface {
        return $this->httpClient->request(
            $method,
            $this->baseUrl . $url,
            $options
        );
    }

    /**
     * @param string $url
     * @param string|null $body
     * @return ResponseInterface
     * @throws TransportExceptionInterface
     */
    public function getRequest(
        string $url,
        string $body = null
    ): ResponseInterface {
        $options = [];
        if ($body !== null) {
            $options['body'] = $body;
        }
        return $this->doRequest(
            $url,
            Request::METHOD_GET,
            $options
        );
    }

    /**
     * @param string $url
     * @param string|null $body
     * @return ResponseInterface
     * @throws TransportExceptionInterface
     */
    public function postRequest(
        string $url,
        string $body = null
    ): ResponseInterface {
        $options = [];
        if ($body !== null) {
            $options['body'] = $body;
        }
        return $this->doRequest(
            $url,
            Request::METHOD_POST,
            $options
        );
    }
}
