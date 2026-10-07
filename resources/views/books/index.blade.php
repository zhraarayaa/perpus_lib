<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 50%, #7dd3fc 100%);
            min-height: 100vh;
            color: #334155;
        }
        .card-custom {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        .table th {
            background-color: #f0f9ff !important;
            color: #0369a1;
            font-weight: 600;
        }
        .btn-primary-custom {
            background: linear-gradient(135deg, #38bdf8 0%, #0284c7 100%);
            border: none;
            color: white;
            border-radius: 10px;
            padding: 8px 16px;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.2);
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: white;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">Books</h2>
                <p class="text-secondary mb-0">Kelola daftar koleksi buku dengan mudah.</p>
            </div>
            <a href="{{ route('books.create') }}" class="btn btn-primary-custom">
                <i class="fas fa-plus me-1"></i> Add New Book
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
        @endif

        <!-- Main Card & Table -->
        <div class="card card-custom p-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="py-3 ps-3">No</th>
                                <th class="py-3">Title</th>
                                <th class="py-3">Author</th>
                                <th class="py-3">Year</th>
                                <th class="py-3">ISBN</th>
                                <th class="py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $index => $book)
                            <tr>
                                <td class="ps-3 fw-semibold text-secondary">{{ $index + 1 }}</td>
                                <td class="fw-semibold text-dark">{{ $book->title }}</td>
                                <td class="text-secondary">{{ $book->author }}</td>
                                <td><span class="badge bg-light text-dark border">{{ $book->year_published }}</span></td>
                                <td class="text-secondary font-monospace small">{{ $book->isbn }}</td>
                                <td class="text-center">
                                    <div class="d-inline-flex gap-1">
                                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm text-white rounded-2 px-2" title="Show"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm rounded-2 px-2" title="Edit"><i class="fas fa-pen"></i></a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm rounded-2 px-2" title="Delete"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-secondary">Belum ada data buku.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>