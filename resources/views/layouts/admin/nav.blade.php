<div class="data-scrollbar" data-scroll="1">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">

            {{-- <li class="border p-4">
                <div class="text-center">
                    <img src="{{ asset('images/user/' . 'Admin' .'.png') }}" alt="profile-img" class="rounded profile-img img-fluid avatar-70 text-center">
                    <p>{{getAuthCard()->fullname}}</p>
                </div>
                <div>
                    Phone: {{getAuthCard()->phone}}
                </div>
            </li> --}}

            <li class="{{ (strpos(Route::currentRouteName(), 'installercards.detail') === 0) ? 'active' : ''}}">
                <a href="{{ route('installercards.detail') }}" class="svg-icon">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 60.000000 60.000000"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

                        <g transform="translate(0.000000,60.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                            <path d="M6 554 c-8 -20 -8 -488 0 -508 3 -9 9 -16 13 -16 3 0 5 117 3 260
                        l-3 260 281 0 280 0 0 -249 c0 -218 -2 -250 -16 -255 -9 -3 -112 -6 -230 -6
                        l-214 0 0 230 c0 149 -4 230 -10 230 -7 0 -9 -81 -8 -237 l3 -238 238 0 c200
                        0 239 2 247 15 11 16 14 488 4 514 -5 14 -41 16 -294 16 -253 0 -289 -2 -294
                        -16z" />
                            <path d="M164 497 c-3 -8 -4 -41 -2 -73 l3 -59 95 0 95 0 0 70 0 70 -93 3
                        c-72 2 -94 0 -98 -11z m176 -62 l0 -55 -80 0 -80 0 0 55 0 55 80 0 80 0 0 -55z" />
                            <path d="M205 430 c3 -5 19 -10 36 -10 16 0 29 5 29 10 0 6 -16 10 -36 10 -21
                        0 -33 -4 -29 -10z" />
                            <path d="M295 430 c4 -6 11 -8 16 -5 14 9 11 15 -7 15 -8 0 -12 -5 -9 -10z" />
                            <path d="M422 498 c-12 -12 -16 -95 -6 -122 5 -12 20 -16 60 -16 61 0 74 13
                        74 75 0 60 -14 75 -68 75 -27 0 -53 -5 -60 -12z m98 -63 l0 -55 -45 0 -45 0 0
                        48 c0 27 3 52 7 55 3 4 24 7 45 7 l38 0 0 -55z" />
                            <path d="M40 490 c0 -5 6 -10 14 -10 8 0 18 5 21 10 3 6 -3 10 -14 10 -12 0
                        -21 -4 -21 -10z" />
                            <path d="M40 430 c0 -5 9 -10 21 -10 11 0 17 5 14 10 -3 6 -13 10 -21 10 -8 0
                        -14 -4 -14 -10z" />
                            <path d="M45 370 c-3 -5 3 -10 15 -10 12 0 18 5 15 10 -3 6 -10 10 -15 10 -5
                        0 -12 -4 -15 -10z" />
                            <path d="M167 303 c-11 -10 -8 -143 3 -143 6 0 10 28 10 65 l0 65 170 0 170 0
                        0 -90 0 -90 -160 0 c-92 0 -160 4 -160 9 0 5 7 17 16 25 11 12 20 13 34 6 31
                        -16 38 -12 76 41 l37 50 33 -32 33 -32 38 24 c30 18 34 25 20 27 -10 2 -26 -3
                        -36 -12 -16 -15 -20 -14 -49 14 -45 43 -43 44 -105 -44 -16 -23 -20 -24 -43
                        -14 -24 11 -29 9 -55 -20 -54 -60 -50 -62 151 -62 209 0 200 -5 200 110 0 115
                        9 110 -199 110 -98 0 -181 -3 -184 -7z" />
                            <path d="M44 109 c-8 -14 11 -33 25 -25 6 4 11 11 11 16 0 13 -29 20 -36 9z" />
                        </g>
                    </svg>
                    <span class="ml-4"> {{__('nav.dashboards')}}</span>
                </a>
            </li>


        </ul>
    </nav>
    <div class="p-3"></div>
</div>
