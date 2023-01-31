<div
    id="delete-product"
    class="absolute top-1/3 bg-gray-100 w-1/4 p-4 translate-x-1/2 right-1/2 hidden"
>
    <p class="mb-4">Delete Product</p>
    <form
        id="delete-product-form"
        action="/user/products/"
        method="delete"
    >
        <div class="flex justify-end space-x-10">
            <button
                class="bg-red-800 hover:bg-red-700 px-4 py-2 rounded-md text-white"
                type="submit"
            >Delete</button>
            <button
                class="px-4 py-2 rounded-md bg-gray-200 hover:bg-gray-300"
                type="button"
                onclick="toggleDeleteForm()"
            >Cancel</button>
        </div>
    </form>
</div>
