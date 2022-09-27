<x-app-layout title="Sampein" active="home">
    <div class="card mt-5 mx-auto" style="max-width: 600px">
        <div class="card-body">
            <h4 class="text-center">Dapatkan Pesan Rahasiamu</h4>
            <p>Dapatkan pesan anonim dari teman atau orang lain yang ingin mengirim pesan rahasia kepada kamu.</p>
            <form action="{{ route('home.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" placeholder="Nama kamu"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info btn-block">Daftar</button>
            </form>
        </div>
    </div>
</x-app-layout>
