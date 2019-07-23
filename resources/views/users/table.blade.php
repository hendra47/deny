

<table class="table table-responsive" id="users-table">
    <thead>
        <th>Nik</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Group</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->nik !!}</td>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->username !!}</td>
            <td>{!! $user->password !!}</td>
            <td>{!! App\Helpers\spkHelper::group($user->group) !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>