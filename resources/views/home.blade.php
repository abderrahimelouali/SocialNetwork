    <x-master title="Home Page">
        <h3>Welcome to home page</h3>
        <x-users-table :users="$users" />
        {{-- it is not recommened to use slots, use props instead --}}
        <x-alert color="warning">warning alert</x-alert>
        <x-alert color="primary">primary alert</x-alert>
        <x-alert color="danger">danger alert</x-alert>
        <x-alert color="success">success alert</x-alert>
    </x-master>


    