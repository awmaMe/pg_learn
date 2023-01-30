<div
    id="add-product"
    class="absolute w-3/4 top-16 bg-gray-300 p-4 shadow-md hidden"
>
    <h4 class="py-2">Add Product</h4>
    <form
        class="flex flex-col items-end"
        action="user/products"
        method="post"
    >
        @csrf
        <x-form.input
            type="text"
            name="name"
            placeholder="Product name"
        />
        <div class="grid grid-cols-2 w-1/3 mt-2 gap-2">
            <button
                class="bg-sky-500 hover:bg-sky-600 hover:text-gray-200 p-2 rounded-md"
                type="submit"
            >Add</button>
            <button
                class="bg-gray-300 hover:bg-gray-400 rounded-md"
                onclick="toggleAddProductForm('add-product')"
                type="button"
            >Cancel</button>
        </div>
    </form>
</div>
<script>
    function toggleAddProductForm() {
        let form = document.getElementById('add-product');
        let form_classes = form.classList;
        form_classes.contains('hidden') ? form_classes.remove('hidden') : form_classes.add('hidden');
    }
</script>
