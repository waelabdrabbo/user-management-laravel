@props(['listing'])
<x-card>
        <img src="{{asset($listing['imageUrl'])}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $listing['title'] }}</h5>
            <p class="card-text">{{ $listing['description'] }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="mailto:{{ $listing['email'] }}">{{ $listing['email'] }}</a></li>
            <li class="list-group-item"><a href="{{ $listing['website'] }}">{{ $listing['website'] }}</a></li>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            {{-- <li class="list-group-item">{{ }}</li> --}}
            <li class="list-group-item">{{ $listing['location'] }}</li>
            <li class="list-group-item">{{ $listing['company'] }}</li>
        </ul>
        <div class="card-footer">
            <a href="/listings/{{ $listing['id'] }}" class="btn btn-primary">Go somewhere</a>
        </div>
</x-card>