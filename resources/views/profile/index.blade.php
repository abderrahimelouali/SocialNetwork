<x-master title="Profiles Page">
    <div class="container my-4"> <!-- Adds margin top & bottom -->
        <h1>Profiles:</h1>

        <div class="row">
            @foreach ($profiles as $profile)
                <x-profile-card :profile="$profile" />
            @endforeach
        </div>

        <div class="mt-4">
            {{ $profiles->links() }}
        </div>
    </div>
</x-master>
