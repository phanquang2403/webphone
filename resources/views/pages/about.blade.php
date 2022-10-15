@extends('layouts.master')

@section('title', 'Giới Thiệu')

@section('content')

  <section class="bread-crumb">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home_page') }}">{{ __('header.Home') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Giới Thiệu</li>
      </ol>
    </nav>
  </section>

  <div class="site-about">
    <section class="section-advertise">
      <div class="content-advertise">
        <div id="slide-advertise" class="owl-carousel">
          @foreach($advertises as $advertise)
            <div class="slide-advertise-inner" style="background-image: url('{{ Helper::get_image_advertise_url($advertise->image) }}');" data-dot="<button>{{ $advertise->title }}</button>"></div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="section-about">
      <div class="section-header">
        <h2 class="section-title">Giới Thiệu</h2>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="content-left">
              <div class="note">
                <div class="note-icon"><i class="fas fa-info-circle"></i></div>
                <div class="note-content">
                  <p>website <strong>PhoneStore</strong> là một sản phẩm của đồ án tốt nghiệp đề tài: <i>Thiết kế website thương mại điện tử kinh doanh xe máy hàng đầu!</p>
                </div>
              </div>
              <div class="content">
                <p>KINH DOANH xe máy Honda chính hãng
CUNG CẤP phụ tùng Honda chính hãng
DỊCH VỤ bảo trì, bảo dưỡng, tư vấn và sửa chữa xe
HƯỚNG DẪN lái xe an toàn
Với phương châm “TẤT CẢ VÌ NIỀM VUI & SỰ THỎA MÃN CỦA KHÁCH HÀNG“

Ban giám đốc và tập thể nhân viên QUANG MINH đã nỗ lực đi tiên phong trong việc phục vụ chuyên nghiệp bằng cách bài trí showroom sang trọng, đầu tư trung tâm bảo dưỡng với trang thiết bị hiện đại nhằm mang đến cho khách hàng những sản phẩm và dịch vụ hậu mãi tốt nhất. Vì vậy cho đến nay, doanh nghiệp đã và đang nhận được sự ủng hộ và tin cậy của đa số khách hàng và địa phương.

Để đạt được sự yêu mến và tin cậy của khách hàng, tập thể doanh nghiệp QUANG MINH cam kết không ngừng cải tiến chất lượng phục vụ, tự hoàn thiện để trở thành người bạn đồng hành với khách hàng sử dụng xe máy Honda trên địa bàn tỉnh HÀ NỘI và các vùng lân cận.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="content-right">
              <div class="online_support">
                <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                <img src="{{ asset('images/support_online.jpg') }}">
                <h3 class="sub_title">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                <div class="phone">
                  <a href="tel:18006750" title="1800 6750">1800 6750</a>
                </div>
                <div class="or"><span>HOẶC</span></div>
                <h3 class="title">Chat hỗ trợ trực tuyến</h3>
                <h3 class="sub_title">Chúng tôi luôn trực tuyến 24/7.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

@endsection

@section('css')
  <style>
    .slide-advertise-inner {
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 21.25%;
    }
    #slide-advertise.owl-carousel .owl-item.active {
      -webkit-animation-name: zoomIn;
      animation-name: zoomIn;
      -webkit-animation-duration: .6s;
      animation-duration: .6s;
    }
  </style>
@endsection

@section('js')
  <script>
    $(document).ready(function(){

      $("#slide-advertise").owlCarousel({
        items: 2,
        autoplay: true,
        loop: true,
        margin: 10,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive:{
          0:{
            items: 1,
          },
          992:{
            items: 2,
            animateOut: 'zoomInRight',
            animateIn: 'zoomOutLeft',
          }
        },
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
      });
    });
  </script>
@endsection
