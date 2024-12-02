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
            <p>{{ $offer->status }}</p>
        </div>
    </div>

    <div class="offerProgress">
        <table class="table table-bordered container" id="table">
            <thead>
                <tr>
                    <th scope="col" id="headerTable">#</th>
                    <th scope="col" id="headerTable">Date</th>
                    <th scope="col" id="headerTable">Comment</th>
                </tr>
            </thead>
            <tbody>
                @if (!($offer->status)->isEmpty())
                    @foreach ($offer->status as $status)
                        <tr>
                            <td>{{ $status->id }}</td>
                            <td>{{ $status->created_at }}</td>
                            <td>{{ $status->comment }}</td>
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