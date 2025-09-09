<x-layout>
<div class="overflow-x-auto rounded border border-gray-300 shadow-sm dark:border-gray-600">
  <table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
    <thead class="ltr:text-left rtl:text-right">
      <tr class="*:font-medium *:text-gray-900 dark:*:text-white">
        <th class="px-3 py-2 whitespace-nowrap">Nama</th>
        <th class="px-3 py-2 whitespace-nowrap">Tanggal lahir</th>
        <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
        <th class="px-3 py-2 whitespace-nowrap">id</th>
        <th class="px-3 py-2 whitespace-nowrap">Detail S</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($data as $hasil )
            
        <tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
          <td class="px-3 py-2 whitespace-nowrap">{{$hasil['nama']}}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{$hasil['tanggal_lahir']}}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{$hasil['nilai']}}</td>
          <td class="px-3 py-2 whitespace-nowrap">{{$hasil['id']}}</td>
          <td class="px-3 py-2 whitespace-nowrap"> <a href="{{ route('siswa.show',$hasil['id']) }}" >Detail selengkapnya</a></td>

        </tr>
        @endforeach

 
    </tbody>
  </table>
</div>
{{-- pagination doang belom dengan search live pakai links () --}}
{{-- kalo mau pake query  parameter jadi pake appends()request() --}}
<div class="py-10">
  {{ $data->appends(request()->query())->links() }}
</div>
<x-slot:footer>
    <strong>siswa Page</strong>
</x-slot:footer>
</x-layout>