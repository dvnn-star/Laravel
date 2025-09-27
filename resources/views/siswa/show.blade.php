<x-layout> 
    {{-- <h1 class="text-4xl font-bold  text-yellow-200"> siswa dengan id {{$id }} </h1>    --}}
    <div class="flow-root">
  <dl class="-my-3 divide-y divide-gray-200 rounded border border-gray-200 text-sm">
    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-100">Nama</dt>

      <dd class="text-gray-100 sm:col-span-2">{{$siswa->nama}}</dd>
    </div>


    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-100">Tanggal Lahir</dt>

      <dd class="text-gray-100 sm:col-span-2">{{$siswa->tanggal_lahir}}</dd>
    </div>

    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-100">nilai</dt>

      <dd class="text-gray-100 sm:col-span-2">{{$siswa->nilai}}</dd>
    </div>

    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-100">id</dt>

      <dd class="text-gray-100 sm:col-span-2">
        {{ $siswa['id'] }}
      </dd>
    </div>
    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
      <dt class="font-medium text-gray-100">Mentor</dt>

      <dd class="text-gray-100 sm:col-span-2">{{$siswa->mentor->nama}}</dd>
    </div
  </dl>
</div>
  <form action="{{ route('siswa.destroy',$siswa->id) }}" method="POST" class="my-10">
    @csrf
    @method('DELETE')
    <button class="font-bold border py-1 rounded-2xl px-1 text-3xl text-blue-100" type="submit">Delete</button>
  </form>
  

  <a href="{{ route('siswa.edit',$siswa->id) }}" class="font-bold text-2xl border rounded-2xl p-3"> Edit data</a>

<x-slot:footer>
    <strong>contact Page</strong>
</x-slot:footer>
</x-layout>
