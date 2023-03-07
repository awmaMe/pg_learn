<div
    x-cloak
    x-show="show_edit_form"
    class="absolute top-1/3 bg-gray-300 w-1/2 p-4 right-1/2 translate-x-1/2 text-black"
>
    <h1>Edit Product</h1>
    <form
        x-bind:action="url"
        method="POST"
    >
        @csrf
        @method('put')
        <x-form.input
            type="text"
            name="name"
            placeholder="Enter new product name"
            ::value="selected_product_name"
        />
        <div class="flex justify-end text-sm mt-4">
            <button
                class="bg-sky-500 hover:bg-sky-600 hover:text-gray-200 p-2 rounded-md mr-4"
                type="submit"
            >Submit</button>
            <button
                class="bg-gray-200 hover:bg-gray-500 hover:text-gray-200 p-2 rounded-md"
                x-on:click="toggleForm('edit')"
                type="button"
            >Cancel</button>
        </div>
    </form>
</div>
