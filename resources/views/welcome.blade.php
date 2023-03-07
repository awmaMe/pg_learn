<x-layouts.mainLayout>
    @foreach ($users as $user)
        <div class="flex justify-evenly w-2/3 mx-auto">
            <div class="w-1/3 mr-4">hello</div>
            <div class="w-1/3 mr-4">{{ $user->name }}</div>
            <div class="w-1/3 mr-4">{{ $user->username }}</div>
        </div>
    @endforeach
</x-layouts.mainLayout>
