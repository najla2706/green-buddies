@extends('template.landing')

@section('title', 'Artikel - Green Club')

@section('content')
    <section class="py-5">
        <div class="container">
            <form action="{{ route('article') }}" method="GET" class="mb-4">
                <div class="d-flex">
                    <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control"
                        placeholder="Cari artikel...">
                    <button type="submit" class="btn btn-success ms-2">Cari</button>
                </div>
            </form>

            <div class="mb-5 row ">
                @foreach ($articles as $article)
                    <div class="p-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : 'https://via.placeholder.com/150' }}"
                                class="card-img-top" alt="Article Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                                <a href="{{ route('article.show', $article->id) }}" class="btn btn-success">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </section>

@endsection
