@if (session()->has('mwa_flash'))
    @foreach(session()->get('mwa_flash') as $flash)
        <div class="alert alert-{{ $flash['level'] }}">
            <button type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-hidden="true">&times;</button>

            {!! $flash['message'] !!}
        </div>
    @endforeach
@endif

