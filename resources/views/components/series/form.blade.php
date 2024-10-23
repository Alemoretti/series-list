<form action="{{ $action }}" method="POST">
    @csrf
    @isset( $name )
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" @isset( $name ) value="{{ $name }}" @endisset>
        <button type="submit" class="btn btn-primary mt-3">Confirm</button>
    </div>
</form>