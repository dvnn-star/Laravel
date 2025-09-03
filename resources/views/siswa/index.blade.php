<x-layout> 
    <h1> daftar siswa</h1>
    @foreach ( $data as  $hasil)
       <li>
        <h3>
            {{ $hasil['nama'] }} - {{ $hasil['nilai']}}  - {{ $hasil['id'] }}
        </h3>
       </li>
    @endforeach
<x-slot:footer>
    <strong>siswa Page</strong>
</x-slot:footer>
</x-layout>

