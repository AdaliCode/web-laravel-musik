@extends('layout.main')
@section('title', "MP326 | $singer->name")
@section('content')
<div style="background-image:url('/storage/singer.jpg')" class="p-5 align-items-center">
    <div class="row g-0 text-light">
        <div class="col">
            <small>Verified Artist</small>
            <h1 class="text-capitalize fs-1" style="font-weight: 900">{{ $singer->name }}</h1>
            <small>3,149,602 monthly listeners</small>
        </div>
    </div>
</div>
<div class="container py-3">
    <div id="song" class="mb-5">
        <h3 class="lato-700">Populer</h3>
        <table class="table table-borderless" id="songs">
          <tbody>
            @foreach ($singer->songs as $key => $item)
                <tr>
                    <td scope="row">{{ $key+1 }}</td>
                    <td scope="row"><a href="/songs/{{ $item->id }}" class="text-decoration-none text-dark">{{ $item->title }}</a></td>
                    <td scope="row">1.000.000</td>
                    <td scope="row">{{ $item->minutes_duration }}:{{ sprintf('%02d', $item->second_duration) }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <p>Lihat Semua</p>
    </div>
    <h3 class="lato-700">Tentang</h3>
    <div class="row">
        <div class="col-8">
            <div class="card text-bg-dark">
                <div class="card-body">
                    <img src="{{ asset('storage/singer.jpg') }}" class="card-img-top my-3" alt="..." style="width: 15%; border-radius: 25%">
                    <h5 class="card-title">1.000.000 pendengar bulanan</h5>
                    <p class="card-text">{{ $singer->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection