<x-app-layout title="Sampein" active="home">
    @push('styles')
        <style>
            .card-body {
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
                height: 500px !important;
                width: 100% !important;
            }
        </style>
    @endpush

    <div class="card mt-5 mx-auto text-center" style="max-width: 600px">
        <div class="card-body">
            <h2> {{ $messages->content }}</h2>
        </div>
    </div>
</x-app-layout>
