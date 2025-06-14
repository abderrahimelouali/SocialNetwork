<x-master title="Profiles Page">
    <h3>
        profile:
    </h3>
    <div class="container-fluid">
        <diV class="row">
            <div class="card my-4 py-4">
                <img src="{{asset('storage/' .$profile->image)}}" alt="" class="card-img-top w-25 mx-auto">
                <div class="card-body text-center">
                    <h4 class="crad-title">
                       #{{$profile->id}} {{$profile->name}}
                    </h4>
                    <p class="card-text">{{$profile->created_at->format('d/m/Y')}}</p>
                    <p class="card-text">Email: <a href="mailto:{{$profile->email}}">{{$profile->email}}</a></p>
                    <p class="card-text">{{$profile->name}}</p>
                </div>
            </div>
        </diV>
    </div>
</x-master>
