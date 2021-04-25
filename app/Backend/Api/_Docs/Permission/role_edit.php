<?php

/**
 * @OA\Put(
 *     path="/roles/{id}",
 *     operationId="updateRole",
 *     tags={"Roles & Permissions"},
 *     summary="Update role's data",
 *     description="Returns role data",
 *     @OA\Parameter(
 *         name="X-Tenant",
 *         required=true,
 *         in="header",
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         description="The ID of role",
 *         required=true,
 *         in="path",
 *         @OA\Schema(
 *             type="string",
 *             example="75a0f2d3-a0d3-4b0b-b02f-65e70656361d"
 *         )
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/RoleUpdate")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", ref="#/components/schemas/Role")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *         @OA\JsonContent(
 *             ref="#/components/schemas/Response",
 *             example={"status_code"=401, "message"="Authentication failure."}
 *         )
 *     ),
 *     @OA\Response(
 *         response=403,
 *         description="Access denied",
 *         @OA\JsonContent(
 *             ref="#/components/schemas/Response",
 *             example={"status_code"=403, "message"="User does not have the right permissions."}
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Not found",
 *         @OA\JsonContent(
 *             ref="#/components/schemas/Response",
 *             example={"status_code"=404, "message"="Role not found."}
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Unprocessable Entity",
 *         @OA\JsonContent(
 *             ref="#/components/schemas/Response",
 *             example={
 *                 "message"="The given data was invalid."
 *                 "errors"={
 *                     "field_name"={
 *                         "Error description 1",
 *                         "Error description 2",
 *                         "...",
 *                     }
 *                 }
 *             }
 *         )
 *     ),
 *     security={
 *         {"bearerAuth": {}}
 *     }
 * )
 */
