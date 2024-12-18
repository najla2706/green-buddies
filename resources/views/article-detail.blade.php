@extends('template.landing')

@section('title', $article->title . ' - Green Club')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-8">
                    <div class="card">
                        <img src="{{ $article->image_path ? asset('storage/' . $article->image_path) : 'https://via.placeholder.com/150' }}"
                            class="article-img" alt="Article Image">
                        <div class="card-body">
                            <h1 class="card-title">{{ $article->title }}</h1>
                            <p class="text-muted">Diposkan oleh {{ $article->user->name }} pada
                                {{ $article->created_at->format('d M Y') }}</p>
                            <div class="mt-3">
                                <p>{{ $article->content }}</p>
                            </div>
                            <a href="/article" class="btn btn-success">Kembali ke Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
