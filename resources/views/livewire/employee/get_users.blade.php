<div class="continer-fluid">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $data as $item)
                <tr>
                    <td scope="col">{{$item["name"]}}</td>
                    <td scope="col">{{$item["email"]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
