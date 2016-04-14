<div class="row margin-bottom: 50px;">
    <div id="owl" class="owl-carousel owl-theme">
        @foreach($owl as $owls)
            <div class="item"><img src="/upload/hero/{{ $owls->url }}" alt="{{ $owls->name }}"></div>
        @endforeach
    </div>
</div>