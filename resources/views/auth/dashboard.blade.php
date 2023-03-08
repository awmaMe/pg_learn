<x-layouts.mainLayout>
    <main class="w-3/4 mx-auto text-2xl lg:text-sm">
        <ul
            x-data="{ show_add_form: false }"
            class="grid grid-cols-2 grid-flow-row lg:grid-cols-4 gap-4 text-center"
        >
            <button
                class="p-2 hover:bg-sky-800 hover:text-slate-100"
                x-on:click="show_add_form = !show_add_form"
            >
                Add Product
            </button>
            <x-auth.add-product />
        </ul>

        <x-auth.products />
    </main>
</x-layouts.mainLayout>
