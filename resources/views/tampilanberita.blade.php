
    <table class="table">
        <thead>
            <tr>
                <th> ID </th>
                <th> Title </th>
                <th> Author </th>
                <th> Tahun </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $pro)
                <tr>
                    <td> {{ $pro ['id']}} </td>
                    <td> {{ $pro ['title'] }} </td>
                    <td> {{ $pro ['author']}} </td>
                    <td> {{ $pro ['published_at'] }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>