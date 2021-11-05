<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"> No </th>
                <th scope="col"> Name </th>
                <th scope="col"> Email </th>
            </tr>
        </thead>

        @foreach ($contacts as $contact)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
</div>