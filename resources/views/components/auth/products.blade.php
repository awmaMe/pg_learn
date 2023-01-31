<div class="overflow-x-auto">
    <table class="w-full">
        <thead>
            <tr class="">
                <th class="w-1/2 text-left">Product name</th>
                <th class="w-1/2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="py-2">{{ $product->name }}</td>
                    <td>
                        <div class="flex justify-end text-sm space-x-2">
                            <button
                                class="outline outline-1 outline-green-400 max-w-min px-2 rounded-md hover:bg-green-200"
                                onclick="toggleEditForm({{ $product->id }})"
                            >Edit</button>
                            <button
                                class="outline outline-1 outline-red-500 max-w-min px-2 rounded-md hover:bg-red-200"
                                onclick="toggleDeleteForm({{ $product->id }}, {{ $product->name }})"
                            >Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<x-auth.products.edit-form />
<x-auth.products.delete-form />

<script>
    function toggleEditForm(product_id) {
        let edit_product = document.getElementById('edit-product');
        let edit_product_classlist = edit_product.classList;
        let edit_product_form = document.getElementById('edit-product-form');

        edit_product_classlist.contains('hidden') ? edit_product_classlist.remove('hidden') : edit_product_classlist
            .add('hidden');

        if (!product_id) {
            edit_product_form.action = 'user/products/';
            return;
        }

        edit_product_form.action += product_id;
    }

    function toggleDeleteForm(product_id, product_name) {
        let delete_product = document.getElementById('delete-product');
        let delete_product_form = document.getElementById('delete-product-form');

        delete_product.classList.contains('hidden') ? delete_product.classList.remove('hidden') : delete_product
            .classList.add('hidden');

        if (!product_id) {
            delete_product_form.action = 'user/products/';
            delete_product.firstElementChild.textContent = 'Delete Product';
            return;
        }

        delete_product_form.action += product_id;
        delete_product.firstElementChild.textContent += ` ${product_name}`;
    }
</script>
