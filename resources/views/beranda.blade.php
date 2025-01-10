<!-- INDRA WAHYU MAHENDRA (202253050) -->
@extends('layouts.second')
@section('volume')
<!-- ===== Hero Start ===== -->
<section class="gj do ir hj sp jr i pg">
    <!-- Hero Images -->
    <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
        <img src="other-images/shape-01.svg" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
        <img src="other-images/shape-02.svg" alt="shape" class="xc 2xl:ud-block h u p va" />
        <img src="other-images/shape-03.svg" alt="shape" class="xc 2xl:ud-block h v w va" />
        <img src="other-images/shape-04.svg" alt="shape" class="h q r" />
        <img src="images/image2.svg" alt="Men" class="h q r ua" />
    </div>

    <!-- Hero Content -->
    <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc _o">
            <div class="animate_left jn/2">
                <h1 class="fk vj zp or kk wm wb">Himpunan Mahasiswa Program Studi Sistem Informasi UMK.
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- ===== Hero End ===== -->

<!-- ===== Team Start ===== -->
<section id="teams" class="i pg ji gp uq">
    <!-- Bg Shapes -->
    <span class="rc h s r vd fd/5 fh rm"></span>
    <img src="other-images/shape-08.svg" alt="Shape Bg" class="h q r" />
    <img src="other-images/shape-09.svg" alt="Shape" class="of h y z/2" />
    <img src="other-images/shape-10.svg" alt="Shape" class="h _ aa" />
    <img src="other-images/shape-11.svg" alt="Shape" class="of h m ba" />

    <!-- Section Title Start -->
    <div x-data="{ sectionTitle: `Struktur Organisasi HiMAPRO SI`, sectionTitleText: ``}">
        <div class="animate_top bb ze rj ki xn vq">
            <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


    </div>
    <!-- Section Title End -->

    <div class="bb ze i va ki xn xq jb jo">
        <div class="wc qf pn xo gg cp">
            <!-- Team Item -->
            <div class="animate_top rj">
                <div class="c i pg z-1">
                    <img class="w-[180px] mx-auto" src="images/paksoni.png " alt="Team" />

                    <div class="ef im nl il">
                        <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                        <span class="h s p rc vd hd mh va"></span>
                        <div class="h s p vd ij jj xa">
                        </div>
                    </div>
                </div>

                <h4 class="yj go kk wm ob zb">Soni Adiyono</h4>
                <p>Pembina</p>
            </div>

            <!-- Team Item -->
            <div class="animate_top rj">
                <div class="c i pg z-1">
                    <img class="vd !w-[300rem]" src="images/mohammadfajarsirullah.png " alt="Team" />

                    <div class="ef im nl il">
                        <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                        <span class="h s p rc vd hd mh va"></span>
                        <div class="h s p vd ij jj xa">
                        </div>
                    </div>
                </div>

                <h4 class="yj go kk wm ob zb">Mohammad Fajar Sirullah</h4>
                <p>Ketua HIMAPRO</p>
            </div>

            <!-- Team Item -->
            <div class="animate_top rj">
                <div class="c i pg z-1">
                    <img class="vd w-[300rem]" src="images/yutianianesicha.png" alt="Team" />

                    <div class="ef im nl il">
                        <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                        <span class="h s p rc vd hd mh va"></span>
                        <div class="h s p vd ij jj xa">
                        </div>
                    </div>
                </div>

                <h4 class="yj go kk wm ob zb">Yutia Nia Nesicha</h4>
                <p>Wakil Ketua HIMAPRO</p>
            </div>
        </div>
    </div>
</section>
<!-- ===== Team End ===== -->

<!-- ===== Services Start ===== -->
<section id="departments" class="lj tp kr">
    <!-- Section Title Start -->
    <div x-data="{ sectionTitle: `Departemen HIMAPRO SI`, sectionTitleText: ``}">
        <div class="animate_top bb ze rj ki xn vq">
            <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>


    </div>
    <!-- Section Title End -->

    <div class="bb ze ki xn yq mb en">
        <div class="wc qf pn xo ng">
            <!-- Service Item -->
            @foreach ($departments as $department)
            <div class="animate_top sg oi pi zq ml il am cn _m">
                <img src="storage/{{ $department->icon }}" alt="Icon" />
                <h4 class="ek zj kk wm nb _b">{{ $department->nama }}</h4>
                <p>{{ $department->detail }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ===== Services End ===== -->

<!-- ===== Pricing Table Start ===== -->
<section x-data="setup()" class="i pg fh rm ji gp uq">
    <!-- Bg Shapes -->
    <img src="other-images/shape-06.svg" alt="Shape" class="h aa y" />
    <img src="other-images/shape-03.svg" alt="Shape" class="h ca u" />
    <img src="other-images/shape-07.svg" alt="Shape" class="h w da ee" />
    <img src="other-images/shape-12.svg" alt="Shape" class="h p s" />
    <img src="other-images/shape-13.svg" alt="Shape" class="h r q" />

    <!-- ===== Blog Start ===== -->
    <section id="events" class="ji gp uq">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Latest Blogs & News`, sectionTitleText: ``}">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Blog Item -->
                @foreach ($events as $event)
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="storage/{{ $event->poster }}" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="/detail/{{$event->id}}" class="vc ek rg lk gh sl ml il gi hi">Read
                                More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="other-images/icon-man.svg" alt="User" />
                                <p>{{ $event->lokasi }}</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="other-images/icon-calender.svg" alt="Calender" />
                                <p>{{ $event->mulai }}</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">{{ $event->deskripsi }}</a>
                        </h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->

    <!-- ===== Contact Start ===== -->
    <section id="support" class="i pg fh rm ji gp uq">
        <!-- Bg Shapes -->
        <img src="other-images/shape-06.svg" alt="Shape" class="h aa y" />
        <img src="other-images/shape-03.svg" alt="Shape" class="h ca u" />
        <img src="other-images/shape-07.svg" alt="Shape" class="h w da ee" />
        <img src="other-images/shape-12.svg" alt="Shape" class="h p s" />
        <img src="other-images/shape-13.svg" alt="Shape" class="h r q" />
    </section>
</section>

@endsection