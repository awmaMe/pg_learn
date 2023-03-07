<div
    x-show="show_delete_form"
    class="absolute top-1/3 bg-gray-300 w-1/4 p-4 translate-x-1/2 right-1/2 text-black"
>
    <p class="mb-4">Delete <span x-text="${selected_product_name} klk" /></p>
    <form
        ::action="url"
        method="delete"
    >
        @csrf
        <div class="flex justify-end space-x-10">
            <button
                class="bg-red-800 hover:bg-red-700 px-4 py-2 rounded-md text-white"
                type="submit"
            >Confirm</button>
            <button
                class="px-4 py-2 rounded-md bg-gray-200 hover:bg-gray-300"
                type="button"
                x-on:click="toggleForm('delete')"
            >Cancel</button>
        </div>
    </form>
</div>
