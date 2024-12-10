@extends('layout.app')

@section('content')
    <div class="offerInfo">
        <div>
            <h3 class="titleShow">{{ $offer->title }}</h3>
            <h5 class="companyShow">{{ $offer->company }}</h5>
        </div>
        <div>
            <a href="{{ $offer->url }}" class="linkShow">Link to the offer</a>
            <p class="statusShow">{{ $offer->StatusCompany }}</p>
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
                @if (!$offer->statusses->isEmpty())
                    @foreach ($offer->statusses as $StatusCompany)
                        <tr>
                            <td>{{ $StatusCompany->id }}</td>
                            <td>{{ $StatusCompany->created_at }}</td>
                            <td>{{ $StatusCompany->comentary }}</td>
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
    <a href="{{route('homeOffer')}}">
        <button type="button" class="buttonStyle2">Back</button>
    @endsection
