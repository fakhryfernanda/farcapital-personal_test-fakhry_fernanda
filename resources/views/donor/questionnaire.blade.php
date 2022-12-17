@extends('layout')

@section('content')
<section class="mb-10">
    <div class="w-[1200px] mx-auto mt-24 p-4 border border-slate-400">
        <h1 class="mb-10 text-4xl font-bold">Kuesioner Donor</h1>
        <form action="donor/register" method="post">
            @csrf
            <div class="flex flex-col gap-4">
                <div class="">
                    <p class="italic font-semibold">Apakah anda?</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">1. Pernah menderita hepatitis B</p>
                        <input required type="radio" id="ya" name="hepatitis" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="hepatitis" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">2. Pengidap HIV dan AIDS menurut hasil pemeriksaan saat donor darah</p>
                        <input required type="radio" id="ya" name="aids" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="aids" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Saat ini</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">3. Apakah anda sedang dalam ketergantungan obat?</p>
                        <input required type="radio" id="ya" name="ketergantungan_obat" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="ketergantungan_obat" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">4. Apakah anda memiliki alkoholisme akut dan kronis?</p>
                        <input required type="radio" id="ya" name="alkoholisme" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="alkoholisme" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">5. Apakah anda mengidap sifilis?</p>
                        <input required type="radio" id="ya" name="sifilis" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="sifilis" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">6. Apakah anda menderita Tuberkulosis secara klinis?</p>
                        <input required type="radio" id="ya" name="tuberkolosis" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="tuberkolosis" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">7. Apakah anda menderita epilepsi dan sering kejang</p>
                        <input required type="radio" id="ya" name="epilepsi" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="epilepsi" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">8. Apakah anda menderita penyakit kulit pada vena
                            (pembuluh darah balik) yang akan ditusuk
                        </p>
                        <input required type="radio" id="ya" name="penyakit_kulit" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="penyakit_kulit" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">9. Apakah anda mempunyai kecenderungan perdarahan
                            atau penyakit darah, misalnya thalasemia
                        </p>
                        <input required type="radio" id="ya" name="penyakit_darah" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="penyakit_darah" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">10. Apakah anda Seseorang yang termasuk kelompok
                            masyarakat yang berisiko tinggi
                            mendapatkan HIV dan AIDS (homoseks, morfinis, berganti-ganti pasangan seks dan pemakai jarum suntik tidak steril)
                        </p>
                        <input required type="radio" id="ya" name="resiko_aids" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="resiko_aids" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>
                
                <div class="">
                    <p class="italic font-semibold">Saat ini (untuk perempuan)</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">11. Apakah anda sedang hamil atau dalam jangka waktu 6
                            bulan sesudah persalinan?</p>
                        <input required type="radio" id="ya" name="hamil" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="hamil" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">12. Apakah anda sedang menyusui?</p>
                        <input required type="radio" id="ya" name="menyusui" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="menyusui" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">13. Apakah anda sedang dalam masa haid?</p>
                        <input required type="radio" id="ya" name="haid" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="haid" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Dalam waktu 24 jam terakhir</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">14. Apakah anda melakukan vaksinasi polio, influenza, kolera, stetanus
                            dipteria atau profilaksis?</p>
                        <input required type="radio" id="ya" name="vaksinasi" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="vaksinasi" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Dalam waktu 72 jam terakhir</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">15. Apakah anda melakukan operasi gigi?</p>
                        <input required type="radio" id="ya" name="operasi_gigi" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="operasi_gigi" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Dalam waktu 1 minggu terakhir</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">16. Apakah anda memiliki gejala alergi menghilang?</p>
                        <input required type="radio" id="ya" name="alergi" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="alergi" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Dalam waktu 2 minggu terakhir</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">17. Apakah anda melakukan vaksinasi virus hidup parotitis epidemica,
                            measles dan tetanus toxin?
                        </p>
                        <input required type="radio" id="ya" name="vaksinasi_virus_hidup" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="vaksinasi_virus_hidup" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Dalam waktu 6 bulan terakhir</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">18. Apakah anda melakukan kontak erat dengan penderita hepatitis?</p>
                        <input required type="radio" id="ya" name="kontak_dengan_hepatitis" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="kontak_dengan_hepatitis" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">19. Apakah anda mendapat transfusi?</p>
                        <input required type="radio" id="ya" name="mendapat_transfusi" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="mendapat_transfusi" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">20. Apakah anda membuat tato/tindik telinga?</p>
                        <input required type="radio" id="ya" name="tato" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="tato" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">21. Apakah anda melakukan operasi kecil?</p>
                        <input required type="radio" id="ya" name="operasi_kecil" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="operasi_kecil" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <div class="">
                    <p class="italic font-semibold">Dalam waktu 12 bulan terakhir</p>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">22. Apakah anda melakukan injeksi terakhir imunisasi rabies
                            therapeutic?</p>
                        <input required type="radio" id="ya" name="injeksi_rabies" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="injeksi_rabies" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                    <div class="flex items-center">
                        <p class="w-[800px] mr-8">23. Apakah anda melakukan transplantasi kulit?</p>
                        <input required type="radio" id="ya" name="transplantasi_kulit" value="T" class="mr-1">
                        <label for="ya" class="mr-8">Ya</label><br>
                        <input required type="radio" id="tidak" name="transplantasi_kulit" value="F" class="mr-1">
                        <label for="tidak">Tidak</label><br>
                    </div>
                </div>

                <button type="submit" class="w-fit mx-auto mt-4 py-2 px-4 bg-sky-400 text-white rounded-md">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection