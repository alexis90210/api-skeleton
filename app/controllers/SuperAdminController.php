<?php
header('Content-Type: application/json; charset=utf-8');

// SuperAdminController

class SuperAdminController {
     /**
    * @OA\Post(
    *     path="/superadmin",
    *     summary="Create superadmin",
    *     @OA\Response(
    *         response=200,
    *         description="Add a new superadmin"
    *     )
    * )
    */
    public function create() {
        // TODO: Implement logic
    }

    /**
    * @OA\Get(
    *     path="/superadmin",
    *     summary="Returns all superadmin",
    *     @OA\Response(
    *         response=200,
    *         description="A list of superadmin"
    *     )
    * )
    */
    public function show() {
        // TODO: Implement logic
    }

    /**
    * @OA\Put(
    *     path="/superadmin",
    *     summary="Update superadmin",
    *     @OA\Response(
    *         response=200,
    *         description="Update a single of superadmin"
    *     )
    * )
    */
    public function update() {
        // TODO: Implement logic
    }

    /**
    * @OA\Delete(
    *     path="/superadmin",
    *     summary="Delete superadmin",
    *     @OA\Response(
    *         response=200,
    *         description="A single of superadmin"
    *     )
    * )
    */
    public function delete() {
        // TODO: Implement logic
    }
}

