<x-layout title="Series">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control">
            <button type="submit" class="btn btn-primary mt-3">Insert</button>
        </div>
    </form>
</x-layout>