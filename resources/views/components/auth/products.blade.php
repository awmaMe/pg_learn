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
                        <div class="flex justify-evenly text-sm">
                            <button
                                class="outline outline-1 outline-green-400 max-w-min px-2 rounded-md hover:bg-green-200"
                                onclick="toggleEditForm({{ $product->id }})"
                            >Edit</button>
                            <button
                                class="outline outline-1 outline-red-500 max-w-min px-2 rounded-md hover:bg-red-200"
                                onclick="toggleDeleteForm({{ $product->id }})"
                            >Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div
    id="edit-product"
    class="absolute top-1/3 bg-gray-100 w-1/2 p-4 right-1/2 translate-x-1/2 hidden"
>
    <h1>Edit Product</h1>
    <form
        action="user/products/"
        method="POST"
        id="edit-product-form"
    >
        @csrf
        @method('put')
        <x-form.input
            type="text"
            name="name"
            placeholder="Enter new product name"
        />
        <div class="flex justify-end text-sm mt-4">
            <button
                class="bg-sky-500 hover:bg-sky-600 hover:text-gray-200 p-2 rounded-md mr-4"
                type="submit"
            >Edit</button>
            <button
                class="bg-gray-200 hover:bg-gray-500 hover:text-gray-200 p-2 rounded-md"
                onclick="toggleEditForm()"
                type="button"
            >Cancel</button>
        </div>
    </form>
</div>
<script>
    function toggleEditForm(product_id) {
        let edit_product = document.getElementById('edit-product');
        let edit_product_classlist = edit_product.classList;
        let edit_product_form = document.getElementById('edit-product-form');

        edit_product_classlist.contains('hidden') ? edit_product_classlist.remove('hidden') : edit_product_classlist
            .add(
                'hidden');

        if (!product_id) {
            edit_product_form.action = 'user/products/';
            return;
        }

        edit_product_form.action += product_id;
    }

    function toggleDeleteFrom(product_id) {
        let delete_product = document.getElementById
    }
</script>
