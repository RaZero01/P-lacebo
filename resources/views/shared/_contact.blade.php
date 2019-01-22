@if ($contact != '')
<span class="d-block">
    @if ($type == 'phone')
    Телефон: <a href="tel:{{  preg_replace("/[^0-9]/", "", $contact) }}">{{ $contact }}</a>
    @elseif ($type == 'email')
    Е-mail: <a href="mailto:{{ $contact }}">{{ $contact }}</a>
    @endif
</span>
@endif