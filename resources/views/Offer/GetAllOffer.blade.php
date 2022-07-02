<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                    <li class="nav-item">
                        <a class="nav-link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                    </li>
                @endforeach

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">{{__('message.FirstName.key')}}</th>
        <th scope="col">{{__('message.LastName.key')}}</th>
        <th scope="col">{{__('message.Operation.key')}}</th>

    </tr>
    </thead>
    <tbody>
    @foreach($dataoffer as $dataoffer)
    <tr>
        <th scope="row">{{$dataoffer->id}}</th>
        <td>{{$dataoffer->name}}</td>
        <td>{{$dataoffer->detais}}</td>
        <td><a class="btn btn-success" href="{{route('offer.OfferEdite' , $dataoffer->id)}}">{{__('message.Update.key')}}</a> </td>
    </tr>
    @endforeach
    </tbody>
</table>
