<h1>
    {{-- <?php echo $heading; ?> without blade --}}
    {{$heading}}
</h1>

@if (count($listings) == 0)
    <p>No listings found</p>
@endif

{{-- <?php foreach($listings as $listing) : ?> without blade  --}}
@foreach ( $listings as $listing )
    
<h2>
    {{-- <?php echo $listing['title']; ?> --}}
    <a href="/listings/{{$listing['id']}}">
        {{$listing['title']}}
    </a>
</h2>
<p>
    {{-- <?php echo $listing['description']; ?> --}}
    {{$listing['description']}}
</p>

@endforeach
{{-- <?php endforeach; ?> without blade  --}}