<x-app-layout title="Sampein" active="show">
    @if (Session::has('success'))
        <div class="alert alert-info alert-dismissible fade show mx-auto mt-5" role="alert" style="max-width: 600px">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mt-5 mx-auto" style="max-width: 600px">
        <div class="card-body">
            <h4 class="text-center">Tulis Pesan Rahasiamu Untuk</h4>
            <h5 class="text-center">{{ $people->name }}</h5>
            <p class="mt-3">*{{ $people->name }} tidak akan tahu siapa yang mengirim pesan rahasia ini.</p>
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <input type="hidden" name="people_id" value="{{ $people->id }}">
                <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="6"
                        class="form-control @error('content') is-invalid @enderror" placeholder="Tulis pesan rahasia kamu disini">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            Pesan waajib diisi
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info btn-block">Kirim</button>
                <button type="button" class="btn btn-secondary btn-block mt-2" onclick="salinLink()">Salin
                    Link</button>
            </form>
        </div>
    </div>
    <div style="max-width: 600px" class="mx-auto">
        <h5 class="mb-4">Pesan Untuk {{ $people->name }}</h5>
        @forelse ($people->messages as $message)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $message->content }}</p>
                    <a href="{{ route('messages.show', $message->id) }}" class="btn btn-info btn-sm">Lihat</a>
                </div>
            </div>
        @empty
            <div class="alert alert-info">
                Belum ada pesan untuk {{ $people->name }}
            </div>
        @endforelse

        {{ $people->messages->links() }}
    </div>

    @push('scripts')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function salinLink() {
                var link = "{{ route('show', $people->uuid) }}";

                navigator.clipboard.writeText(link);

                Swal.fire({
                    title: 'Link berhasil disalin',
                    text: "{{ route('show', $people->uuid) }}",
                    icon: 'success',
                    confirmButtonText: 'Tutup'
                })
            }
        </script>
    @endpush
</x-app-layout>
