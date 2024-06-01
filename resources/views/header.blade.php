{{--header ini adalah child-view yang akan di masukan ke dalam view include--}}
@isset($title)
    <h1>{{$title}}</h1>
@else
    <h1>Anak Om Mamat</h1>
@endisset

{{--semua data yang dikirim ke template utama akan dikirim ke template yang kita @include--}}
{{--kita juga bisa menambahnya ketika menggunakan directive @include(template, data)--}}
@isset($description)
    <p>{{$description}}</p>
@endisset
