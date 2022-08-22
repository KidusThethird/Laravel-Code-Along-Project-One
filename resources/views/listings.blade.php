<h1>{{$heading}}</h1>

@if(1>0)
    @php echo "true"; @endphp
@endif


@foreach($listings as $listing)
    <h2>
     <a href="/laravel/laravel_project_one/public/listings/{{$listing['id']}}"> 
     
     {{$listing['title'];}}
    </h2>
</a>  
    <p>
        {{$listing['description'];}}
    </p>

    @endforeach