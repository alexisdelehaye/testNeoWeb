
<html>
<h1>Horaire du restaurant {{$restaurant->name}}</h1>
<div class="container">
    <table class="table table-striped">
        </thead>
        <tbody>
        @foreach($restaurant->horaires as $horaires)
            <tr>
                <td>{{$horaires->Jour}} : {{$horaires->Crénaux}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
</html>