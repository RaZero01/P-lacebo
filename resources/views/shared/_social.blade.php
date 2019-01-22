@if ($social_url != '')
<span class="d-block social mt-2">
    <a href="{{ $social_url }}" class="social d-block">
        <span class="d-block social mt-2">
            @if ($social_type == 'instagram')
            <i class="fab fa-instagram"></i> <i class="social-name">Instagram</i>
            @elseif ($social_type == 'facebook')
            <i class="fab fa-facebook"></i> <i class="social-name">Facebook</i>
            @endif
        </span>
    </a>
</span>
@endif