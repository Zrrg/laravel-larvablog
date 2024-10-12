<h4> Submit new post: </h4>
<div class="row">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
    <div class="mb-3">
        <textarea name="post" class="form-control" id="idea" rows="3"></textarea>
        @error('post')
            <span class='d-block fs-6 text-danger mt-2'>{{ $message }}</span>
        @enderror
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> Share </button>
    </div>
    </form>
</div>