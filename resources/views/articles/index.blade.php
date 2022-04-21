@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="container">
        <div class="row mb-2">   
            <div class="col-md-3">
                <a class="btn btn-success" href="{{ route('cetak_pdf') }}">Cetak PDF</a>   
            </div>         
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <tr>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Gambar</th>
                    </tr>
                    @foreach ($articles as $article)
                    <tr>
                        <td><a href="{{ route('articles.edit', ['article'=>$article->id]) }}">{{ $article->title }}</a></td>
                        <td>{{ $article->content }}</td>
                        <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>    
@endsection