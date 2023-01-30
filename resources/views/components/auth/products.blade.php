<table>
    <thead>
        <tr>
            <th>Product name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
