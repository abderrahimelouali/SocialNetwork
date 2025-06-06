 <x-master title="Profiles Page">
     <h1>Profiles:</h1>
     <table class="table">
         <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Bio</th>
         </tr>
         @foreach ($profiles as $profile)
             <tr>
                 <td>{{ $profile->id }}</td>
                 <td>{{ $profile->name }}</td>
                 <td>{{ $profile->email }}</td>
                 <td>{{ Str::limit($profile->bio, 50) }}
                        <div>
                            <a href="{{route('profiles.show',['id'=>$profile->id])}}">Show details</a>
                        </div>
                 </td>
             </tr>
         @endforeach
        </table>
        {{$profiles->links()}}
 </x-master>
