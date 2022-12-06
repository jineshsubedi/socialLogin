<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            </ol>
        </nav>
    </x-slot>

    <section class="section dashboard">
        <div class="alert alert-dismissible border-primary fade show text-center" role="alert">
            {{ __("You're logged in!") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </section>
</x-app-layout>
