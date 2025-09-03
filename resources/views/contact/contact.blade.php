<x-layout> 
 <h1>u can contact us in here</h1>
    <ul>
<form action="">
    <label for="Nama">Nama </label><br>
    {{-- pake kurung kurawal ganda untuk menapilkan data  --}}
    <input type="text" id="Nama" value="{{ $nama}}" style="border: 2px solid black;"><br><br>
    {{-- @if (  $nama  != "kwkw" )
        <h1>Haii</h1>
        
    @endif --}}
    <label for="umur">Umur</label><br>
    <input id="umur" type="text" value="{{ $umur }}" style="border: 2px solid red;">
</form>

    </ul>
    <button>Submit</button>
<x-slot:footer>
    <strong>contact Page</strong>
</x-slot:footer>
</x-layout>
