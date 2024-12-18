@extends('template.dashboard')

@section('content')
    <h2 class="mt-4">Daftar Artikel</h2>

    <!-- Button Tambah Artikel -->
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ route('article.create') }}" class="btn btn-success">Tambah Artikel</a>
    </div>

    <!-- Tabel Artikel -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Image</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category }}</td>
                    <td>{{ $article->created_at->format('d M Y') }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" width="100">
                    </td>
                    <td>
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('article.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada artikel</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
@endsection
