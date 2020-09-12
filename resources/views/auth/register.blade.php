<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="3000.000000pt" height="3000.000000pt" viewBox="0 0 3000.000000 3000.000000" preserveAspectRatio="xMidYMid meet" class="w-32 h-32"><metadata>
                    Created by potrace 1.11, written by Peter Selinger 2001-2013
                </metadata> <g transform="translate(0.000000,3000.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M14883 27480 c-77 -14 -203 -63 -269 -105 -42 -26 -1738 -1716 -6010 -5988 -4691 -4692 -5959 -5965 -5987 -6013 -20 -33 -51 -103 -68 -155 -30 -86 -33 -104 -33 -219 0 -115 3 -133 33 -219 17 -52 48 -122 68 -155 52 -89 11920 -11957 12009 -12009 33 -20 103 -51 155 -68 86 -30 104 -33 219 -33 115 0 133 3 219 33 52 17 122 48 155 68 89 52 11957 11920 12009 12009 20 33 51 103 68 155 30 86 33 104 33 219 0 115 -3 133 -33 219 -17 52 -48 122 -68 155 -52 89 -11920 11957 -12009 12009 -98 58 -228 97 -342 102 -53 2 -120 0 -149 -5z m677 -5520 c1212 -70 2307 -548 3169 -1385 1254 -1218 1762 -3002 1341 -4710 -424 -1721 -1763 -3089 -3480 -3555 -675 -183 -1415 -219 -2110 -100 l-165 28 -1952 -1951 c-1074 -1073 -1954 -1949 -1957 -1946 -3 2 -6 2045 -6 4539 -1 4997 -6 4615 60 5004 83 493 230 938 460 1391 475 936 1225 1686 2165 2165 754 384 1632 568 2475 520z"></path> <path d="M14980 20409 c-956 -99 -1813 -609 -2349 -1399 -295 -434 -463 -878 -538 -1420 -24 -178 -24 -624 1 -805 94 -692 376 -1294 837 -1791 516 -557 1183 -902 1949 -1010 178 -26 663 -26 840 -1 704 100 1318 395 1824 878 518 495 863 1170 961 1879 108 788 -73 1583 -510 2240 -535 803 -1393 1324 -2349 1425 -158 16 -522 18 -666 4z"></path></g></svg>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="Name" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="Email" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="Password" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="Confirm Password" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
