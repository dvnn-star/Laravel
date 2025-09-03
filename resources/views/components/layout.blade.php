{{-- layout fungsinya agar mempergampang --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <x-navlink href="/">
            home    
        </x-navlink>
        <x-navlink href="/about">
            About   
        </x-navlink>
        <x-navlink href="/contact">
            Contact    
        </x-navlink>
       <x-navlink href="/siswa">
            Daftar Siswa    
        </x-navlink>
    </nav>
    <main>
        {{-- ini slots untuk ngambil isi dari page lain   --}}
        {{ $slot }}
    </main>
    <footer>
        ini dari footer dari page <span>{{$footer}}</span>
    </footer>
</body>
</html>