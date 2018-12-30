<html>

<form method="POST" action="{{ route('post_target') }}">
    {{ csrf_field() }}
    <input type="text" name="input_value" id="input_value" value="{{ old('input_value') }}">
    <button type="submit">submit</button>

    @if (session('add_value'))
        <div class="alert alert-success">
            {{ session('add_value') }}
        </div>
    @endif
</form>

</html>