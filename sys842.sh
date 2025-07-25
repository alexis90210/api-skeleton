#!/bin/bash

# Check if a name was provided
if [ -z "$1" ]; then
  echo "❌ Please provide a name. Example: ./sys842.sh superadmin"
  exit 1
fi

# Format the input to PascalCase (first letter uppercase)
name=$(echo "$1" | sed -E 's/(^|_)([a-z])/\U\2/g')
name_lowercase="${name,,}"



# File paths
controller="app/controllers/${name}Controller.php"
model="app/models/${name}Model.php"
routes="app/routes/${name}Routes.php"

# Create folders if they don't exist
mkdir -p app/controllers app/models app/routes

# Create the files
touch "$controller" "$model" "$routes"

# Optional: populate files with boilerplate
cat > "$controller" <<EOF
<?php
header('Content-Type: application/json; charset=utf-8');

// ${name}Controller

class ${name}Controller {
     /**
    * @OA\Post(
    *     path="/${name_lowercase}",
    *     summary="Create ${name_lowercase}",
    *     @OA\Response(
    *         response=200,
    *         description="Add a new ${name_lowercase}"
    *     )
    * )
    */
    public function create() {
        // TODO: Implement logic
    }

    /**
    * @OA\Get(
    *     path="/${name_lowercase}",
    *     summary="Returns all ${name_lowercase}",
    *     @OA\Response(
    *         response=200,
    *         description="A list of ${name_lowercase}"
    *     )
    * )
    */
    public function show() {
        // TODO: Implement logic
    }

    /**
    * @OA\Put(
    *     path="/${name_lowercase}",
    *     summary="Update ${name_lowercase}",
    *     @OA\Response(
    *         response=200,
    *         description="Update a single of ${name_lowercase}"
    *     )
    * )
    */
    public function update() {
        // TODO: Implement logic
    }

    /**
    * @OA\Delete(
    *     path="/${name_lowercase}",
    *     summary="Delete ${name_lowercase}",
    *     @OA\Response(
    *         response=200,
    *         description="A single of ${name_lowercase}"
    *     )
    * )
    */
    public function delete() {
        // TODO: Implement logic
    }
}

EOF

cat > "$model" <<EOF
<?php

// ${name}Model

class ${name}Model {
    public function handle() {
        // TODO: Implement logic
    }
   
}
EOF

cat > "$routes" <<EOF
<?php

// ${name} Routes
\$router->map('POST', '/${name_lowercase}', 'app/controllers/${name}Controller@create');
\$router->map('GET', '/${name_lowercase}', 'app/controllers/${name}Controller@show');
\$router->map('PUT', '/${name_lowercase}', 'app/controllers/${name}Controller@update');
\$router->map('DELETE', '/${name_lowercase}', 'app/controllers/${name}Controller@delete');
EOF

echo "✅ Files created:"
echo "  - $controller"
echo "  - $model"
echo "  - $routes"
