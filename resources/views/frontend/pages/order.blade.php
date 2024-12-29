<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderDetails as $order)
                <tr>
                    <td>{{ $order['name'] }}</td>
                    <td>{{ $order['qty'] }}</td>
                    <td>$ {{ $order['price'] * $order['qty'] }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="2"><strong>Order Total</strong></td>
                <td><strong>$ {{ $totalPrice }}</strong></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
