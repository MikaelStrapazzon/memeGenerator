<img
    {{ $attributes }}
    src="{{ asset('assets/logo.png') }}"
    alt=" "
    onerror="
        this.onerror=null;
        this.title='{{ __('common.img_error') }}'
        this.src='{{ asset('assets/icons/ban.svg') }}';
    "
/>
