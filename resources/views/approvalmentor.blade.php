@extends('layouts.mentor')
@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--success m-portlet--head-solid-bg m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_2">
                    <div class="m-portlet m-portlet--full-height ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Pengajuan 
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            @if($jadwal->isEmpty()) <center> Tidak Ada Pengajuan </center> @endif
                            @foreach($jadwal as $jd)
                            <div class="m-widget3">
                                <div class="m-widget3__item">
                                    <div class="m-widget3__header">

                                        <div class="m-widget3__user-img">
                                            @if($jd->fotoProfile==NULL)
                                            <img class="m-widget3__img" src="{{ url('/data_fileSiswa/default_photo_profile.png') }}" />
                                            @else
                                            <img class="m-widget3__img" src="{{ url('/data_fileSiswa2/'.$jd->fotoProfile) }}" /></a>
                                            @endif
                                            {{-- <img class="m-widget3__img" src="" alt=""> --}}
                                        </div>
                                        <div class="m-widget3__info">
                                            <span class="m-widget3__username">
                                                {{$jd->NamaLengkap}}
                                                {{-- {{$jd-> NoIDBimbel}} --}}
                                                {{-- {{$jd->statusBimbel}} --}}
                                            </span>
                                            <br>
                                            <span class="m-widget3__time">
                                                {{$jd->prodiBimbel}}

                                            </span>
                                        </div>
                                        <span class="m-widget3__status m--font-info">
                                            @if($jd->statusBimbel==1) 
                                            Pending
                                            @elseif($jd->statusBimbel==2)
                                            Approval
                                            @else
                                            Cancel
                                            @endif

                                        </span>
                                        <a href="detailApprovalBimbel/{{$jd->NoIDBimbel}}">
                                            <button type="button" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary" data-toggle="modal" data-target="#m_modal_3">
                                                Detail
                                            </button>
                                        </a>
                                    </div>
                                    <div class="m-widget3__info">
                                        <p class="m-widget3__text">
                                            Mulai Bimbel {{$jd->tglprivate}}. Hari {{$jd->days}}. Waktu {{$jd->start}} - {{$jd->end}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection