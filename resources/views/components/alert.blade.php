
@if (session('success'))
    <div class="alert">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert">
        <strong>Please correct the following errors:</strong>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
