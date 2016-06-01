@if (session()->has('mwa_flash'))
    @foreach(session()->get('mwa_flash') as $key => $flash)
    <div class="alert alert-{{ $flash[0]['level'] }}">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-hidden="true">&times;</button>

        {!! $flash[0]['message'] !!}
    </div>
    @endforeach
@endif

