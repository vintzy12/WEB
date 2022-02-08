fun main()
{

    val day = 3 // tipe int

    val hari = when(day)
    {
        in 1 .. 5 -> "libur"
          2 -> "Senin"
          3 -> "Selasa"
          4 -> "Rabu"
          5 -> "Kamis"
          6 -> "Jumat"
          7 -> "Sabtu"
          else -> "Hari tidak ada"
    }

   println(hari)
}