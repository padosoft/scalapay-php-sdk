<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Service;

use Exception;
use Scalapay\Sdk\Interfaces\Service\CurlInterface;

/**
 * Class Curl
 *
 * @package Scalapay\Sdk\Service
 */
class Curl implements CurlInterface
{
    /** @var string GET */
    const GET = 'get';

    /** @var string POST */
    const POST = 'post';

    /**
     * Call an endpoint.
     *
     * @param string $url
     * @param string $requestMethod
     * @param array $httpHeaders
     * @param array $payload
     * @param array $auth
     * @param bool $autoReferer
     * @param bool $followLocation
     * @param bool $verifyPeer
     * @param int $verifyHost
     * @param bool $responseHeaders
     * @param int $timeout
     * @param bool $returnTransfer
     * @return array
     * @throws Exception
     */
    public function call(
        $url,
        $requestMethod,
        $httpHeaders = [],
        $payload = [],
        $auth = [],
        $autoReferer = true,
        $followLocation = true,
        $verifyPeer = true,
        $verifyHost = 2,
        $responseHeaders = false,
        $timeout = 60,
        $returnTransfer = true
    ) {
        // init vars
        $curl = curl_init();
        $response = [];

        // set authentication curl option
        if (count($auth) && isset($auth['username']) && isset($auth['password'])) {
            $username = $auth['username'];
            $password = $auth['password'];
            curl_setopt($curl, CURLOPT_USERPWD, $username . ':' . $password);
        }

        // set curl options
        switch ($requestMethod) {
            case self::GET:
                curl_setopt_array(
                    $curl,
                    [
                        CURLOPT_URL => $url,
                        CURLOPT_HTTPHEADER => $httpHeaders,
                        CURLOPT_AUTOREFERER => $autoReferer,
                        CURLOPT_FOLLOWLOCATION => $followLocation,
                        CURLOPT_SSL_VERIFYPEER => $verifyPeer,
                        CURLOPT_SSL_VERIFYHOST => $verifyHost,
                        CURLOPT_HEADER => $responseHeaders,
                        CURLOPT_TIMEOUT => $timeout,
                        CURLOPT_RETURNTRANSFER => $returnTransfer
                    ]
                );
                break;

            default:
            case self::POST:
                curl_setopt_array(
                    $curl,
                    [
                        CURLOPT_URL => $url,
                        CURLOPT_HTTPHEADER => $httpHeaders,
                        CURLOPT_AUTOREFERER => $autoReferer,
                        CURLOPT_FOLLOWLOCATION => $followLocation,
                        CURLOPT_SSL_VERIFYPEER => $verifyPeer,
                        CURLOPT_SSL_VERIFYHOST => $verifyHost,
                        CURLOPT_HEADER => $responseHeaders,
                        CURLOPT_TIMEOUT => $timeout,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => count($payload) ? json_encode($payload) : null,
                        CURLOPT_RETURNTRANSFER => $returnTransfer
                    ]
                );
                break;
        }

        // execute the curl
        $exec = curl_exec($curl);

        // check curl errors
        if (curl_errno($curl)) {
            throw new Exception('Curl error: ' . curl_error($curl));
        }

        // decode the response
        $response['body'] = json_decode($exec, true);

        // attach http response code
        $response['http_code'] = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // close curl and return the response
        curl_close($curl);
        return $response;
    }

    /**
     * Send a request with GET method.
     *
     * @param string $url
     * @param array $httpHeaders
     * @param array $auth
     * @return array
     * @throws Exception
     */
    public function get(
        $url,
        $httpHeaders = [],
        $auth = []
    ) {
        return $this->call(
            $url,
            self::GET,
            $httpHeaders,
            [],
            $auth
        );
    }

    /**
     * Send a request with POST method.
     *
     * @param string $url
     * @param array $payload
     * @param array $httpHeaders
     * @param array $auth
     * @return array
     * @throws Exception
     */
    public function post(
        $url,
        $payload,
        $httpHeaders = [],
        $auth = []
    ) {
        return $this->call(
            $url,
            self::POST,
            $httpHeaders,
            $payload,
            $auth
        );
    }
}
