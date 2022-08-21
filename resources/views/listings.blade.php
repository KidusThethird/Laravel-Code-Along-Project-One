<h1>{{$heading}}</h1>

@if(1>0)
    @php echo "true"; @endphp
@endif


@foreach($listings as $listing)
    <h2>
        {{$listing['title'];}}
    </h2>
    <p>
        {{$listing['description'];}}
    </p>

    @endforeach