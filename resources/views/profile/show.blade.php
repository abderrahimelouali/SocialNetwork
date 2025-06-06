<x-master title="Profiles Page">
    <h3>
        profile details:
    </h3>
    <p>id: {{ $profile->id }}</p>
    <p>name: {{ $profile->name }}</p>
    <p>email: {{ $profile->email }}</p>
    <p>bio: {{ $profile->bio }}</p>
</x-master>
