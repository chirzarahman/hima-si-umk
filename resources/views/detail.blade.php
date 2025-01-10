<!-- INDRA WAHYU MAHENDRA (202253050) -->
@extends('layouts.second')
@section('volume')

<!-- ===== Blog Single Start ===== -->
<section class="gj qp gr hj rp hr">
    <div class="bb ze ki xn 2xl:ud-px-0">
        <div
            class="animate_top rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">
            <img src="/storage/{{ $event->poster }}" alt="Blog" />

            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $event->judul }}</h2>

            <ul class="tc uf cg 2xl:ud-gap-15 fb">
                <li><span class="rc kk wm">Lokasi: </span> {{ $event->lokasi }}</li>
                <li><span class="rc kk wm">Waktu: </span> {{ $event->mulai }} - {{ $event->selesai }}
                </li>
            </ul>

            <p>
                {{ $event->deskripsi }}
            </p>
        </div>
    </div>
</section>
<!-- ===== Blog Single End ===== -->

@endsection