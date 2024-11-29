
    
    <x-layout>   <h1>Jobs list</h1>
   
        <ul>
            @forelse($jobs as $job)
            <li>{{$loop->index}}.    {{$job}}</li>
            @empty
            <p>No jobs found</p>
            @endforelse
    
           
        </ul></x-layout>
 
