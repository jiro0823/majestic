@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Our Barbers</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($barbers as $barber)
                <x-barber-card :barber="$barber" />
            @endforeach
        </div>
    </div>
@endsection
z