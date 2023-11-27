@extends('layouts.applanding')

@section('content')
    <div class="content__header content__boxed mb-4">
        <div class="content__wrap">
            <div class="pt-3 mb-4 text-center">
                <div class="display-2" style="font-family: Ubuntu,sans-serif;">RuangBaca</div>
                <div class="container">
                    <div class="row">
                        <div class="col-6 offset-3 mt-3">
                <form action="{{ route('book.search') }}" method="GET" class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                  <input id="header-search-input" class="searchbox__input form-control bg-transparent" name="keyword" type="search" placeholder="Cari ..." aria-label="Search">
                  <div class="searchbox__backdrop">
                     <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                     <i class="demo-pli-magnifi-glass"></i>
                     </button>
                  </div>
               </form>
            </div>
        </div>
           </div>
               </div>
                  </div>

    <div class="content__boxed">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <div class="content__wrap">
                    <div class="content__boxed">
                        <div class="content__wrap">
                            <div class="row">

                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h1 class="text-dark">Buku Terbaru</h1>
                                    <a class="text-decoration-none" href="{{ route('bukuterbaru') }}">Lihat Semua</a>
                                </div>

                                  @forelse ($bukuterbaru as $data)                          
                                   <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                                        <a href="{{route('buku.detailbuku',['id'=>$data->id, 'slug'=>$data->slug])}}" style="text-decoration: none;">
                                          <div class="card mb-3">
                                            @if ($data->thumbnail)
                                                <img class="card-img-top" src="{{ Storage::url('imgs/thumbnail-buku/'.$data->thumbnail) }}" alt="{{ $data->judul }}" loading="lazy">
                                            @else
                                                <img class="card-img-top" src="{{ Storage::url('imgs/default-pict.png') }}" alt="thumbnail" loading="lazy">
                                            @endif                      
                                            <div class="card-body px-1 py-3">
                                                <h4 class="card-title">{{$data->judul}} ({{$data->tahun_terbit}})</h4>
                                              </div>
                                          </div>
                                        </a>
                                  </div>
                                  @empty
                                  <div class="col-12">
                                      <div class="alert bg-light text-center" role="alert">
                                         Buku belum tersedia
                                      </div>
                                  </div>
                                  @endforelse
                                  <div class="mb-3"></div>

                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h1 class="text-dark">Buku Terpopuler</h1>
                                    <a class="text-decoration-none" href="{{ route('bukuterpopuler') }}">Lihat Semua</a>
                                </div>

                                @forelse ($bukuterpopuler as $data)
                                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                                        <a href="{{ route('buku.detailbuku', ['id' => $data->id, 'slug' => $data->slug]) }}"
                                            style="text-decoration: none;">
                                            <div class="card mb-3">
                                                @if ($data->thumbnail)
                                                    <img class="card-img-top"
                                                        src="{{ Storage::url('imgs/thumbnail-buku/'.$data->thumbnail) }}"
                                                        alt="{{ $data->judul }}" loading="lazy">
                                                @else
                                                    <img class="card-img-top" src="{{ Storage::url('imgs/default-pict.png') }}"
                                                        alt="thumbnail" loading="lazy">
                                                @endif
                                                <div class="card-body px-1 py-3">
                                                    <h6 class="card-title">{{ $data->judul }} ({{ $data->tahun_terbit }})
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                <div class="col-12">
                                      <div class="alert bg-light text-center" role="alert">
                                         Buku belum tersedia
                                      </div>
                                  </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
