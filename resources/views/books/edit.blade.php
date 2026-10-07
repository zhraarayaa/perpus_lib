<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
        .form-control {
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
        }
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.25);
            border-color: #38bdf8;
        }
        .btn-primary-custom {
            background: linear-gradient(135deg, #38bdf8 0%, #0284c7 100%);
            border: none;
            color: white;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 500;
        }
        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card card-custom p-4">
                    <h2 class="fw-bold mb-4 text-dark">Edit Book</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger border-0 rounded-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label fw-medium">Title:</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">Author:</label>
                            <input type="text" name="author" class="form-control" value="{{ old('author', $book->author) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-medium">Year:</label>
                            <input type="number" name="year_published" class="form-control" value="{{ old('year_published', $book->year_published) }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-medium">ISBN:</label>
                            <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $book->isbn) }}" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('books.index') }}" class="text-decoration-none text-secondary fw-medium">&larr; Back</a>
                            <button type="submit" class="btn btn-primary-custom">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>