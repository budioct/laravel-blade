<html>
<body>

<h3>Switch case</h3>
@switch($value)
    @case("A")
        Nilai: A Memuaskan
        @break
    @case("B")
        Nilai: B Bagus
        @break
    @case("C")
        Nilai: C Cukup
        @break
    @default
        Tidak Lulus
@endswitch

</body>
</html>
