<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

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


<div class="card text-white bg-info    "  style="max-width: 40rem; margin:5% 35% ; width: 35rem !important;">

    <div class="container">
        <div class="row justify-content-center">
            @if(Session::has('success'))
                <div class="alert alert-primary" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif

            <br />

            <form method="post" action="{{route('offer.Update' , $data->id)}}">
                @csrf
                @method('POST')
                <br />
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{{__('message.FirstName_en.input')}}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="FirstName_en" value="{{$data->FirstName_ar}}">

                        @error('FirstName_en')
                        <small class="form-text text-danger">{{__('message.FirstName.required.key')}}</small>
                        @enderror
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{{__('message.FirstName_ar.input')}}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="FirstName_ar"  value="{{$data->FirstName_en}}">

                        @error('FirstName_ar')
                        <small class="form-text text-danger">{{__('message.FirstName.required.key')}}</small>
                        @enderror
                    </div>
                </div>

                <br />


                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{{__('message.LastName_en.input')}}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="LastName_en" value="{{$data->LastName_en}}">

                        @error('LastName_en')
                        <small class="form-text text-danger">{{__('message.LastName.required.key')}}</small>
                        @enderror
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">{{__('message.LastName_ar.input')}}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="LastName_ar" value="{{$data->LastName_ar}}">

                        @error('LastName_ar')
                        <small class="form-text text-danger">{{__('message.LastName.required.key')}}</small>
                        @enderror
                    </div>
                </div>



                <br />


                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>



















{{--<h3>Welcome To Posts Page In QueryBuilder</h3>--}}

{{--<form action="{{route('offer.store')}}" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" placeholder="FirstName" name="FirstName"> <br><br>--}}

{{--    <input type="text" placeholder="LastName" name="LastName"> <br><br>--}}
{{--    <input type="submit">--}}
{{--</form>--}}
