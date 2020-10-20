<?php

namespace gg\WhiteListApiBundle\Extension\Rest;

class RestAdapter implements AdapterInterface
{
    /** @var RestClient */
    protected $client;

    /** @var string  */
    private $baseUrl;

    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;

        $this->client = new RestClient($this->baseUrl);
    }

    public function getClient(): RestClient
    {
        return $this->client;
    }

    public function findByNip(
        string $nip
    ): array {
        $now = new \DateTime();
        $result = $this->client->getRequest(
            '/api/search/nip/' . $nip . '?date=' . $now->format('Y-m-d')
        );

        return $result->toArray();
    }
}
