<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * V1LocationsApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class V1LocationsApi
{
    /**
     * API Client
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    private $apiClient;

    /**
     * Constructor
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    public function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()
                ->setHost('https://connect.squareup.com');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     * @param \SquareConnect\ApiClient $apiClient set the API client
     * @return V1LocationsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * listLocations
     *
     * Provides details for a business's locations, including their IDs.
     *
     * @return \SquareConnect\Model\V1Merchant[]
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listLocations()
    {
        list($response, $statusCode, $httpHeader) = $this->listLocationsWithHttpInfo();
        return $response;
    }

    /**
     * listLocationsWithHttpInfo
     *
     * Provides details for a business's locations, including their IDs.
     *
     * @return Array of \SquareConnect\Model\V1Merchant[], HTTP status code,
     * HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function listLocationsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/me/locations";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = ApiClient::selectHeaderAccept(['application/json']);
        if ($_header_accept !== null) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (!empty($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires OAuth (access token)
        if ($this->apiClient->getConfig()->getAccessToken() !== "") {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()
                    ->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\V1Merchant[]'
            );
            if (!$response) {
                return [null, $statusCode, $httpHeader];
            }

            return [
                \SquareConnect\ObjectSerializer::deserialize(
                    $response,
                    '\SquareConnect\Model\V1Merchant[]',
                    $httpHeader
                ),
                $statusCode,
                $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \SquareConnect\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SquareConnect\Model\V1Merchant[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * retrieveBusiness
     *
     * Get a business's information.
     *
     * @return \SquareConnect\Model\V1Merchant
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveBusiness()
    {
        list($response, $statusCode, $httpHeader) = $this->retrieveBusinessWithHttpInfo();
        return $response;
    }

    /**
     * retrieveBusinessWithHttpInfo
     *
     * Get a business's information.
     *
     * @return Array of \SquareConnect\Model\V1Merchant, HTTP status code,
     * HTTP response headers (array of strings)
     * @throws \SquareConnect\ApiException on non-2xx response
     */
    public function retrieveBusinessWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/me";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = ApiClient::selectHeaderAccept(['application/json']);
        if ($_header_accept !== null) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (!empty($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires OAuth (access token)
        if ($this->apiClient->getConfig()->getAccessToken() !== "") {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()
                    ->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                \SquareConnect\Model\V1Merchant::class
            );
            if (!$response) {
                return [null, $statusCode, $httpHeader];
            }

            return [
                \SquareConnect\ObjectSerializer::deserialize(
                    $response,
                    \SquareConnect\Model\V1Merchant::class,
                    $httpHeader
                ),
                $statusCode,
                $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \SquareConnect\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        \SquareConnect\Model\V1Merchant::class,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
