<x-layouts.mainLayout>
    <main class="w-3/4 mx-auto text-2xl lg:text-sm">
        <ul class="grid grid-cols-2 grid-flow-row lg:grid-cols-4 gap-4 text-center">
            <button
                class="p-2 hover:bg-sky-800 hover:text-slate-100"
                onclick="toggleAddProductForm()"
            >
                Add Product
            </button>
            <x-auth.add-product />
        </ul>

        <x-auth.products />
    </main>
</x-layouts.mainLayout>

<script>
    function toggleAddProductForm() {
        let form = document.getElementById('add-product');
        let form_classes = form.classList;
        form_classes.contains('hidden') ? form_classes.remove('hidden') : form_classes.add('hidden');
    }
</script>
