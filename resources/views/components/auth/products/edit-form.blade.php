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
