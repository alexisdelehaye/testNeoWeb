
<html>
    <h1>Liste des restaurants</h1>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Nom des restaurant</td>
            </tr>

            </thead>
            <tbody>
            @foreach($restaurants as $restaurant)
                <tr>
                    <td>{{$restaurant->name}}</td>
                    <td><a class="btn btn-info" href="{{ route('restaurants.show',$restaurant->id) }}">Show</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
</html>

