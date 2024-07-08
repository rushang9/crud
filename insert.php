<?php
// Assuming $pdo is the PDO instance

$name = 'New Product';
$description = 'This is a new product.';
$price = 29.99;
$stock_quantity = 100;
$category = 'Electronics';

$sql = 'INSERT INTO products (name, description, price, stock_quantity, category) VALUES (:name, :description, :price, :stock_quantity, :category)';
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':name' => $name,
    ':description' => $description,
    ':price' => $price,
    ':stock_quantity' => $stock_quantity,
    ':category' => $category
]);

echo "New product added successfully.";
?>
