@php
    $slider= \App\Models\Duyuru::select('id','description','title','image','detail','slug')->limit(6)->get();
@endphp
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">

    <div class="hero-slides owl-carousel">
        @php
            $i=0;
        @endphp
    @foreach($slider as $rs)
        <!-- Single Hero Slide -->

        <div class="single-hero-slide bg-img bg-overlay" style="background-image: url({{Storage::url($rs->image)}})">
            @php
                $i=$i+1;

            @endphp
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-end">
                    <div class="col-12 col-lg-7">

                        <!-- Slides Content -->
                        <div class="hero-slides-content @if($i==1) active @endif">
                            <h6 class="date" data-animation="fadeInUp" data-delay="100ms">{{$rs->id}}</h6>
                            <h2 data-animation="fadeInUp" data-delay="500ms">{{$rs->title}}</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">{{$rs->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event Button -->
            <div class="next-event-btn" data-animation="bounceInDown" data-delay="900ms">
                <div class="container">
                    <div class="row">
                        <div class="col-6 text-right">
                            <a href="{{route('duyuru',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn faith-btn">Duyuruya Git</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

</section>
<!-- ##### Hero Area End ##### -->
