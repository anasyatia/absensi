@extends('layouts.layout')

@section('page_content')
@csrf
<div class="w-100">
    <div>
        <h2> Dashboard </h2>
        <p> Home / Dashboard </p>
    </div>
    
    {{-- container for cards --}}
    <div class="w-100"> 
        {{-- container for card item --}}
        <div class="content-container-cards-1">
           @include('components/card', ['title' => 'Peserta Didik', 'icon' => 'fas fa-user', 'count' => $siswa])
           <div class="content-container-cards-1">
            @include('components/card', ['title' => 'Administrator', 'icon' => 'fas fa-user', 'count' => $admin])
            @include('components/card', ['title' => 'Pembimbing siswa', 'icon' => 'fas fa-user', 'count' => $ps])
           </div>
        </div>
        <div class="content-container-cards-1 mt-4">
            @include('components/card', ['title' => 'Rombel', 'icon' => 'fas fa-bookmark', 'count' => $rombels])
            @include('components/card', ['title' => 'Rayon', 'icon' => 'fas fa-bookmark', 'count' => $rayon])
         </div>
    </div>
</div>
@endsection