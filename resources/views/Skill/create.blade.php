<!-- resources/views/skills/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@section('content')
    <div class="container">
        <h1>Create Skill</h1>

        <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Name Field -->
            <div class="form-group">
                <label for="name">Skill Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Experience Field -->
            <div class="form-group">
                <label for="experience">Experience (optional)</label>
                <input type="text" class="form-control" id="experience" name="experience" value="{{ old('experience') }}">
                @error('experience')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description Field -->
            <div class="form-group">
                <label for="description">Description (optional)</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload Field -->
            <div class="form-group">
                <label for="image">Skill Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Skill</button>
        </form>
    </div>
@endsection

</body>
</html>

