<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Very Famous Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
<div class="antialiased">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <header class="flex justify-between items-center py-10">
            <div><a aria-label="Very famous Blog" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="3000.000000pt" height="3000.000000pt" viewBox="0 0 3000.000000 3000.000000" preserveAspectRatio="xMidYMid meet" class="w-16 h-16"><metadata>
                                Created by potrace 1.11, written by Peter Selinger 2001-2013
                            </metadata> <g transform="translate(0.000000,3000.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M14883 27480 c-77 -14 -203 -63 -269 -105 -42 -26 -1738 -1716 -6010 -5988 -4691 -4692 -5959 -5965 -5987 -6013 -20 -33 -51 -103 -68 -155 -30 -86 -33 -104 -33 -219 0 -115 3 -133 33 -219 17 -52 48 -122 68 -155 52 -89 11920 -11957 12009 -12009 33 -20 103 -51 155 -68 86 -30 104 -33 219 -33 115 0 133 3 219 33 52 17 122 48 155 68 89 52 11957 11920 12009 12009 20 33 51 103 68 155 30 86 33 104 33 219 0 115 -3 133 -33 219 -17 52 -48 122 -68 155 -52 89 -11920 11957 -12009 12009 -98 58 -228 97 -342 102 -53 2 -120 0 -149 -5z m677 -5520 c1212 -70 2307 -548 3169 -1385 1254 -1218 1762 -3002 1341 -4710 -424 -1721 -1763 -3089 -3480 -3555 -675 -183 -1415 -219 -2110 -100 l-165 28 -1952 -1951 c-1074 -1073 -1954 -1949 -1957 -1946 -3 2 -6 2045 -6 4539 -1 4997 -6 4615 60 5004 83 493 230 938 460 1391 475 936 1225 1686 2165 2165 754 384 1632 568 2475 520z"></path> <path d="M14980 20409 c-956 -99 -1813 -609 -2349 -1399 -295 -434 -463 -878 -538 -1420 -24 -178 -24 -624 1 -805 94 -692 376 -1294 837 -1791 516 -557 1183 -902 1949 -1010 178 -26 663 -26 840 -1 704 100 1318 395 1824 878 518 495 863 1170 961 1879 108 788 -73 1583 -510 2240 -535 803 -1393 1324 -2349 1425 -158 16 -522 18 -666 4z"></path></g></svg>
                </a></div>
            <div class="text-base leading-5">
                @if (Route::has('login'))
                    <div class="fixed top-0 right-0 px-6 py-4">
                        @auth
                            <a href="{{ url('/admin/posts') }}" class="text-sm text-gray-700 underline">Go to Admin</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </header>
    </div>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <main>
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
