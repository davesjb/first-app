@extends ("layouts.master")
@section ("javascript")
<!-- <script>
    alert("hi");
</script> -->
@endsection

@section ("body")
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Pass</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>
                {{$user["id"]}}
            </td>
            <td>
                {{$user["username"]}}
            </td>
            <td>
                {{$user["password"]}}
            </td>
            <td>
                {{$user["email"]}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection