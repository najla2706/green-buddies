@extends('template.landing')

@section('title', 'Green Club - Komunitas Pencinta Lingkungan')

@section('content')
    <section class="py-5 text-center ">
        <img src="{{ asset('images/dashboard.png') }}" width="100%" alt="">
    </section>

    <!-- Daftar Artikel Section -->
    <section class="py-5 articles-list">
        <div class="container">
            <div class="mb-3 d-flex justify-content-between align-items-center w-100">
                <h2 class="mb-0">Artikel Terbaru</h2>
                <a href="{{ route('article') }}" class="btn btn-primary">Lihat Semua Artikel</a>
            </div>

            <div class="row">
                @foreach ($articles as $article)
                    @if ($loop->index < 4)
                        <div class="col-md-3 d-flex align-items-stretch">
                            <div class="card">
                                <img src="{{ $article->image_path ? asset('database/' . $article->image_path) : 'https://via.placeholder.com/150' }}"
                                    class="card-img-top" alt="Article Image">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                                    <a href="{{ route('article.show', $article->id) }}" class="mt-auto btn btn-success">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
@endsection
