<a {{ $href }} class="btn btn-outline-success">
    <i class="fa-solid fa-pen"></i>
</a>

<form method="POST" {{ $action }}>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger">
        <i class="fa-solid fa-trash-can"></i>
    </button>
</form>