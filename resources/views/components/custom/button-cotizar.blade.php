  <a href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
      class="bg-[#0E1D42]  hover:bg-[#0E1D42] text-white font-semibold py-3 rounded-full px-5 text-base {{ $style ?? '' }}">
      {{ $text ?? 'Cotiza tu Plan' }}</a>
