<div class="d-flex column-gap-2 align-items-center">
    <a href="{{ route('stok.edit', [$stok_id]) }}" class="btn btn-sm btn-primary">Edit</a>

    <form action="{{ route('stok.destroy', [$stok_id]) }}" method="post" class="d-flex align-items-center m-0">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger">Delete</button>
    </form>
</div>
