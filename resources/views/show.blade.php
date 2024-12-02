@extends('layout.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
    <div class="offerInfo">
        <div>
            <h3>{{ $offer->title }}</h3>
            <h5>{{ $offer->company }}</h5>
        </div>
        <div>
            <a href="{{ $offer->url }}">Link to the offer</a>
            <p>{{ $offer->StatusCompany }}</p>
        </div>
    </div>

    <div class="offerStatus">
        <table class="table table-bordered container" id="table">
            <thead>
                <tr>
                    <th scope="col" id="headerTable">#</th>
                    <th scope="col" id="headerTable">Date</th>
                    <th scope="col" id="headerTable">Comment</th>
                </tr>
            </thead>
            <tbody>
                @if (!$offer->StatusCompany->isEmpty())
                    @foreach ($offer->Statuscompany as $StatusCompany)
                        <tr>
                            <td>{{ $StatusCompany->id }}</td>
                            <td>{{ $Statuscompany->created_at }}</td>
                            <td>{{ $StatusCompany->comment }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">There's no progress yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
