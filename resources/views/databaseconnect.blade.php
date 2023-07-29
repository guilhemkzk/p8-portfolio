<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects</title>

       
    </head>
    <body>
       <div>Checking connexion...</div>
       <?php
$servername = "localhost";
$database = "u641840408_projects";
$username = "u641840408_projects";
$password = "RainWillFall000+";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>

<table border = "1">
<tr>
<td>id</td>
<td>name</td>
<td>description</td>

</tr>
@foreach ($projects as $project)
<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->name }}</td>
<td>{{ $project->description }}</td>

</tr>
@endforeach
</table>
    </body>
</html>
