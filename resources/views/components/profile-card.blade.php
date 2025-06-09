@props(['profile'])

<div class="col-sm-4 my-3"> <!-- Add vertical margin here -->
    <div class="card">
        <img src="https://randomuser.me/api/portraits/men/{{ $profile->id % 100 }}.jpg" alt="Title"
            class="card-img-top">
        <div class="card-body">

            <h4 class="card-title">{{ $profile->name }}</h4>
            @isset($profile->bio)
                <p class="card-text">{{ Str::limit($profile->bio, 15) }}</p>
            @else
                <p class="card-text">Lorem ipsum dolor sit amet.</p>
            @endisset
            <a href="{{ route('profiles.show', $profile->id) }}" class="stretched-link btn btn-primary">
                Show details
            </a>
        </div>

        <div class="card-foot border-top px-3 py-3" style="z-index: 9">
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger float-end">Delete</button>
            </form>
        </div>
    </div>
</div>
