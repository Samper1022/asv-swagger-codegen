<?php
/**
 * PetApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swagger\Server\Model\ApiResponse;
use Swagger\Server\Model\Pet;

/**
 * PetApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface PetApiInterface
{

    /**
     * Sets authentication method petstore_auth
     *
     * @param string $value Value of the petstore_auth authentication method.
     *
     * @return void
     */
    public function setpetstore_auth($value);

    /**
     * Sets authentication method api_key
     *
     * @param string $value Value of the api_key authentication method.
     *
     * @return void
     */
    public function setapi_key($value);

    /**
     * Operation addPet
     *
     * Add a new pet to the store
     *
     * @param  Swagger\Server\Model\Pet $body  Pet object that needs to be added to the store (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function addPet(Pet $body, &$responseCode, array &$responseHeaders);

    /**
     * Operation deletePet
     *
     * Deletes a pet
     *
     * @param  int $petId  Pet id to delete (required)
     * @param  string $apiKey   (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function deletePet($petId, $apiKey = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation findPetsByStatus
     *
     * Finds Pets by status
     *
     * @param  string[] $status  Status values that need to be considered for filter (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Pet[]
     *
     */
    public function findPetsByStatus(array $status, &$responseCode, array &$responseHeaders);

    /**
     * @deprecated
     * Operation findPetsByTags
     *
     * Finds Pets by tags
     *
     * @param  string[] $tags  Tags to filter by (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Pet[]
     *
     */
    public function findPetsByTags(array $tags, &$responseCode, array &$responseHeaders);

    /**
     * Operation getPetById
     *
     * Find pet by ID
     *
     * @param  int $petId  ID of pet to return (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Pet[]
     *
     */
    public function getPetById($petId, &$responseCode, array &$responseHeaders);

    /**
     * Operation updatePet
     *
     * Update an existing pet
     *
     * @param  Swagger\Server\Model\Pet $body  Pet object that needs to be added to the store (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updatePet(Pet $body, &$responseCode, array &$responseHeaders);

    /**
     * Operation updatePetWithForm
     *
     * Updates a pet in the store with form data
     *
     * @param  int $petId  ID of pet that needs to be updated (required)
     * @param  string $name  Updated name of the pet (optional)
     * @param  string $status  Updated status of the pet (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function updatePetWithForm($petId, $name = null, $status = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation uploadFile
     *
     * uploads an image
     *
     * @param  int $petId  ID of pet to update (required)
     * @param  string $additionalMetadata  Additional data to pass to server (optional)
     * @param  UploadedFile $file  file to upload (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\ApiResponse[]
     *
     */
    public function uploadFile($petId, $additionalMetadata = null, UploadedFile $file = null, &$responseCode, array &$responseHeaders);
}
