@extends('layouts.mitra')
@section('content')

<div class="page-header clear-filter">
    <div class="page-header-image" style="background-image: url('../assets/img/denys.jpg');"></div>
    <div class="content-center text-center">
      <div class="col-md-8 mx-auto">
        <div class="brand">
          <h3 class="description">Apa pun jenis tokomu bisa bergabung bersama GAS</h3>
          <br />
            var videolink = "{{ $first->video }}";
            var videoid = videolink.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
            $('#getvideo').html( '<div class="embed-responsive embed-responsive-4by3"><object 
            class="youtube-video-responsive" type="text/html" 
            data="https://youtu.be/VxVWACx9NIY" style="width:100%;"></object></div>' );
          
            <div class="col-md-8" id="getvideo" style="margin-bottom: 2%;">
        
            </div>
            
        </div>
      </div>
    </div>
</div>

@endsection