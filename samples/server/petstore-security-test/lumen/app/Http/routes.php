<?php

/**
 * Swagger Petstore  ' \" =end
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\   ' \" =end
 *
 * OpenAPI spec version: 1.0.0  ' \" =end
 * Contact: apiteam@swagger.io  ' \" =end
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Swagger Petstore  &#39; \&quot; &#x3D;end
 * @version 1.0.0  &#39; \&quot; &#x3D;end
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * PUT testCodeInject */ &#39; &quot; &#x3D;end
 * Summary: To test code injection  &#39; \&quot; &#x3D;end
 * Notes: 
 * Output-Formats: [application/json, */  " =end]
 */
$app->PUT('/fake', 'FakeApi@testCodeInject */ &#39; &quot; &#x3D;end');

