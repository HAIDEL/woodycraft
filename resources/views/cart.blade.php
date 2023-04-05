<h1>Shopping Cart</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @php $total = 0 @endphp
    @foreach ($cart_items as $product_id => $product)
        @php $subtotal = $product['quantity'] * $product['price'] @endphp
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $subtotal }}</td>
            <td>
                <form method="post" action="{{ route('cart.remove', $product_id) }}">
                    @csrf
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
        @php $total += $subtotal @endphp
    @endforeach
    <tr>
        <td colspan="3">Total:</td>
        <td>{{ $total }}</td>
        <td>
            <form method="post" action="{{ route('cart.clear') }}">
                @csrf
                <button type="submit">Clear Cart</button>
            </form>
        </td>
    </tr>
    </tbody>
</table>
