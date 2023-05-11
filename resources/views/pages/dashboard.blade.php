@extends('../main')

@section('title')
    {{ $title = 'Dashboard Portal Aplikasi PT. INL' }}
@endsection

@section('content')
    <style>
        .card {
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        }
        .card:hover {
            animation: box-shadow 2s infinite linear;
        }
        @keyframes box-shadow {
            0% {
                box-shadow: rgb(82 84 155) 0px 3px 12px;
            }
            50% {
                box-shadow: rgb(223 129 81) 0px 6px 24px;
            }
            70% {
                box-shadow: rgb(87 116 99) 0px 3px 12px;
            }
            100% {
                box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            }
        }
    </style>

    <div class="row">
        <div class="col-md-2">
            <div class="card mb-2">
                <div class="card-body text-center">
                <img src="{{url('/img/logo_favicon.png')}}" class="card-img-top" alt="Gambar" srcset="">
                <h5 class="card-title">Aplikasi 1</h5>
                <small class="card-text">Deskripsi aplikasi 1.</small><br>
                <a href="#" class="btn btn-primary">Masuk</a>
                </div>
            </div>
        </div>
    </div>

@endsection
