@section('content')
<div class="container">
    <h1>Beschikbare Voertuigen</h1>

    <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Kenteken</th>
                <th>Type</th>
                <th>Bouwjaar</th>
                <th>Brandstof</th>
            </tr>
        </thead>
        <tbody>
            @forelse($beschikbareVoertuigen as $voertuig)
            <tr>
                <td>{{ $voertuig->kenteken }}</td>
                <td>{{ $voertuig->type }}</td>
                <td>{{ $voertuig->bouwjaar }}</td>
                <td>{{ $voertuig->brandstof }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No beschikbare voertuigen found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection