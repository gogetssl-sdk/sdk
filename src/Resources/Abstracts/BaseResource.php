<?php
namespace GoGetSSL\Resources\Abstracts;

use GoGetSSL\Client;

abstract class BaseResource
{
    /**
     * @var \Crazyssl\Client
     */
    protected $client;

    /**
     * 构造
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * 魔术
     *
     * @param string $method
     * @param string $uri
     * @param array $parameters
     * @return \Crazyssl\Response\Interfaces\BaseResponse
     */
    public function request($method, $uri, $parameters = [])
    {
        return $this->client->request($method, $uri, $parameters);
    }

    /**
     * 过滤未填参数
     *
     * @param array $compacted
     * @return array
     */
    protected function vars($compacted)
    {
        foreach ($compacted as $key => $value)
        {
            if ($value === null) {
                unset($compacted[$key]);
            }
        }
        return $compacted;
    }
}
