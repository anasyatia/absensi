{{-- card component  --}}
<div class="card p-2 d-flex">
    <div class="mb-0">
        <p>{{ $title }}</p>
    </div>
    <div class="">
        <div class='d-flex'>
            <div class='mr-2'><i class="{{ $icon }}"></i></div>
            <div class=''>{{ $count }}</div>
        </div>
    </div>
</div>