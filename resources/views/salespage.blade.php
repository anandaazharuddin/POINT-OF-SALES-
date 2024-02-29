<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Transaction</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1>POS Transaction</h1>

    <section class="product-form">
        <input type="text" id="product-code" placeholder="Product Code">
        <button id="add-product">Add Product</button>
    </section>

    <section class="cart">
        <h2>Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                </tbody>
        </table>
        <div class="total">
            Total: <span id="total-amount">0</span>
        </div>
    </section>

    <section class="payment">
        </section>

    <script src="script.js"></script> 
</body>
</html>
