<!DOCTYPE html>

<h1> User List </h1>
    <table>
    @foreach ($userlist as $users) 
    {
        <td> {{userlist['name']}} </td>
    }
    @endforeach
    </table>