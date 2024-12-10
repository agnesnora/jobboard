
    
    <x-layout>   <h1>Jobs list</h1>
   
        <ul>
            @forelse($jobs as $job)
            <li>{{$job->title}} </br>{{$job->description}}</li>
            @empty
            <p>No jobs found</p>
            @endforelse
    
           
        </ul></x-layout>
 
