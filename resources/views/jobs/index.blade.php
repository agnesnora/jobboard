
    
    <x-layout>   <h1>Jobs list</h1>
   
        <ul>./vendor
            @forelse($jobs as $job)
            <li>
                <a href="{{route('jobs.show', $job->id)}}">{{$job->title}} </a>
             </br>
             {{$job->description}}</li>
            @empty
            <p>No jobs found</p>
            @endforelse
    
           
        </ul></x-layout>
 
