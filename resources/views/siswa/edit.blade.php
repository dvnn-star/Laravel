<x-layout>

    <form action="{{ route('siswa.update',$siswa->id), }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700 ">Nama</label>
        <input
          type="text"
          id="nama"
          name="nama"
          placeholder="Masukkan nama"
          value="{{ $siswa->nama }}"
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
          value="{{ $siswa->tanggal_lahir }}"
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
          value="{{ $siswa->npm }}"
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
          value="{{ $siswa->nilai }}"
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
          value=""
          class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm
          "bvv
          
        >
        
          <option value="{{ $siswa->mentor->nama }}">pick a mentor</option>
          @foreach ($mentors as $mentor)
            <option value="{{ $mentor->id }}" {{ $siswa->mentor->id == $mentor->id ? 'selected' : '' }}>{{$mentor->nama}}</option>
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

<x-slot:footer>
    <strong>Hallooo</strong>teru
</x-slot:footer>
</x-layout>