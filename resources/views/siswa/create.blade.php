<x-layout>
    <section class="min-h-screen flex items-center justify-center">
   
  <div class="w-full bg-white max-w-md shadow-lg rounded-2xl p-6">
    <h2 class="text-2xl font-bold text-center mb-6">Form Mahasiswa</h2>

    <form action="{{ route('siswa.store')}}" method="POST" class="space-y-4">
    @csrf
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700 ">Nama</label>
        <input
          type="text"
          id="nama"
          name="nama"
          placeholder="Masukkan nama"
          value="{{ old('nama') }}"
          class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
        
          
      
          "
          
        />
      </div>
      @error('nama')
          <div class="alert alert-danger text-rose-600">{{$message}}</div>
      @enderror

      <!-- Tanggal Lahir -->
      <div>
        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
        <input
          type="date"
          id="tanggal_lahir"
          name="tanggal_lahir"
          value="{{ old('tanggal_lahir') }}"
          class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
           "
        />
      </div>
       @error('tanggal_lahir')
          <div class="alert alert-danger text-rose-600">{{$message}}</div>
      @enderror


      <!-- NPM -->
      <div>
        <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
        <input
          type="text"
          id="npm"
          name="npm"
          placeholder="Masukkan NPM"
          value="{{ old('npm') }}"
          class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
           "
          
        />
      </div>
        @error('npm')
          <div class="alert alert-danger text-rose-600">{{$message}}</div>
      @enderror

      <!-- Nilai -->
      <div>
        <label for="nilai" class="block text-sm font-medium text-gray-700">Nilai</label>
        <input
          type="number"
          id="nilai"
          name="nilai"
          placeholder="0 - 100"
          min="0"
          max="100"
          value="{{ old('nilai') }}"
          class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
              "
          
        />
      </div>

       @error('nilai')
          <div class="alert alert-danger text-rose-600">{{$message}}</div>
      @enderror

      <!-- Mentor -->
      <div>
        <label for="mentor_id" class="block text-sm font-medium text-gray-700">Mentor</label>
        <select
          id="mentor_id"
          name="mentor_id"
          value="{{ old('mentor_id') }}"
          class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
          "
          
        >
        
          <option value="">-- Pilih Mentor --</option>
          @foreach ($mentors as $mentor)
          <option value="{{ $mentor->id }}">{{$mentor->nama}}</option>
          @endforeach
          
        </select>
      </div>
       @error('mentor_id')
          <div class="alert alert-danger text-rose-600">{{$message}}</div>
      @enderror

   


      <!-- Submit -->
      <button
        type="submit"
        class="w-full rounded-lg bg-indigo-600 px-4 py-2 text-white font-semibold shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500"
      >
        Simpan
      </button>
      {{-- @if(@$errors->any())
          <div>
            <ul>
                @foreach ($errors->all() as $err)
                    <li class="text-2xl text-rose-500 font-bold">{{$err}}</li>
                @endforeach
            </ul>
          </div>
      @enderror --}}
    </form>
  </div>
</section>

    <x-slot:footer>
    <strong>Create page</strong>
    </x-slot:footer>
</x-layout>
