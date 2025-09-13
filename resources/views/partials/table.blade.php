<table id="{{ $id ?? 'example' }}" class="table table-bordered text-nowrap key-buttons">
    <thead class="thead-dark">
        <tr>
            @foreach ($headers as $header)
                <th scope="col">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
