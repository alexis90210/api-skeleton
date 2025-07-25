# Swagger
/**
 * @OA\Get(
 *     path="/users",
 *     summary="Returns all users",
 *     @OA\Response(
 *         response=200,
 *         description="A list of users"
 *     )
 * )
 */
function getUsers() { ... }


# cmd:
vendor/bin/openapi --bootstrap ./autoload.php ./app > public/openapi.json
