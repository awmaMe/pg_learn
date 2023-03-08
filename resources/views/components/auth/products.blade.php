<div x-data="{
    show_edit_form: false,
    show_delete_form: false,
    url: 'user/products/',
    selected_product_name: '',

    toggleForm(form_type, product_id, product_name) {
        if (form_type == 'edit')
            this.show_edit_form = !this.show_edit_form;
        else if (form_type == 'delete')
            this.show_delete_form = !this.show_delete_form;

        this.url = 'user/products/' + (product_id ?? '');
        this.selected_product_name = product_name ?? '';
    }
}">
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
                                    class="outline outline-1 outline-green-400 max-w-min px-2 rounded-md hover:bg-green-200 hover:text-black"
                                    x-on:click="toggleForm('edit', {{ $product->id }}, '{{ $product->name }}')"
                                >Edit</button>
                                <button
                                    class="outline outline-1 outline-red-500 max-w-min px-2 rounded-md hover:bg-red-200 hover:text-black"
                                    x-on:click="toggleForm('delete', {{ $product->id }}, '{{ $product->name }}')"
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
</div>
