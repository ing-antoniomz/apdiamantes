@props(['url'])
<tr>
    <td class="header" style="text-align: center; vertical-align: middle;">
        <a href="{{ $url }}"
            style="display: inline-flex; align-items: center; justify-content: center; text-decoration: none;">
            <img src="{{ asset('apdiamantes/media/logo_negro.png') }}" class="logo" alt="APDiamantes Logo"
                style="vertical-align: middle;">
            <span style="vertical-align: middle; margin-left: 10px;">{{ $slot }}</span>
        </a>
    </td>
</tr>