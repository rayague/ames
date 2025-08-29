<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMES</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

                                    <!-- Hero Section -->
                    <section class="relative min-h-screen w-full flex flex-col overflow-hidden">
                                        <!-- Background Image with Overlay -->
                                        <div class="absolute inset-0">
                                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/lab-equipment.jpg') }}');"></div>
                                            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-indigo-900/70 to-purple-900/80"></div>
                                            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-indigo-600/20"></div>
                                            <!-- Floating geometric shapes -->
                                            <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl animate-float"></div>
                                            <div class="absolute top-40 right-20 w-32 h-32 bg-blue-400/20 rounded-full blur-2xl animate-float-delayed"></div>
                                            <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-indigo-400/15 rounded-full blur-lg animate-float-slow"></div>
                                            <div class="absolute bottom-40 right-1/3 w-24 h-24 bg-white/5 rounded-full blur-xl animate-float-delayed-2"></div>
                                        </div>

                                        <!-- Navbar -->
                                        <nav class="relative z-20 w-full px-4 sm:px-6 lg:px-8 py-6">
                                            <div class="max-w-7xl mx-auto flex items-center justify-between">
                                                <!-- Logo -->
                                                <div class="flex items-center space-x-3">
                                                    <div class="w-10 h-10 bg-gradient-to-r from-white to-blue-100 rounded-xl flex items-center justify-center shadow-lg">
                                                        <span class="text-xl font-black text-blue-700">A</span>
                                            </div>
                                                    <span class="text-xl font-bold text-white hidden sm:block">AMES MED</span>
                                                </div>

                                                <!-- Desktop Menu -->
                                                <div class="hidden md:flex items-center space-x-8">
                                                    <a href="{{ route('home') }}" class="flex items-center space-x-2 text-white/90 hover:text-white font-medium transition-colors duration-300">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                                        </svg>
                                                        <span>Accueil</span>
                                                    </a>
                                                    <a href="{{ route('about') }}" class="flex items-center space-x-2 text-white/90 hover:text-white font-medium transition-colors duration-300">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                                        </svg>
                                                        <span>Qui sommes-nous</span>
                                                    </a>
                                                    <a href="{{ route('catalogue') }}" class="flex items-center space-x-2 text-white/90 hover:text-white font-medium transition-colors duration-300">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                                        </svg>
                                                        <span>Catalogue</span>
                                                    </a>
                                                    <a href="{{ route('contact') }}" class="flex items-center space-x-2 text-white/90 hover:text-white font-medium transition-colors duration-300">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                        </svg>
                                                        <span>Contact</span>
                                                    </a>
                                                </div>

                                                <!-- Mobile Menu Button -->
                                                <button id="mobile-menu-button" class="md:hidden relative w-10 h-10 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                                                    </svg>
                                                </button>
                                                </div>

                                            <!-- Mobile Menu -->
                                            <div id="mobile-menu" class="md:hidden absolute top-full left-0 right-0 bg-white/10 backdrop-blur-md border-t border-white/20 mt-2 mx-4 rounded-2xl shadow-2xl opacity-0 invisible transition-all duration-300 transform translate-y-[-10px]">
                                                <div class="px-6 py-4 space-y-4">
                                                    <a href="{{ route('home') }}" class="flex items-center space-x-3 text-white/90 hover:text-white font-medium transition-colors duration-300 py-2">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                                        </svg>
                                                        <span>Accueil</span>
                                                    </a>
                                                    <a href="{{ route('about') }}" class="flex items-center space-x-3 text-white/90 hover:text-white font-medium transition-colors duration-300 py-2">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                                        </svg>
                                                        <span>Qui sommes-nous</span>
                                                    </a>
                                                    <a href="{{ route('catalogue') }}" class="flex items-center space-x-3 text-white/90 hover:text-white font-medium transition-colors duration-300 py-2">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                                        </svg>
                                                        <span>Catalogue</span>
                                                    </a>
                                                    <a href="{{ route('contact') }}" class="flex items-center space-x-3 text-white/90 hover:text-white font-medium transition-colors duration-300 py-2">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                        </svg>
                                                        <span>Contact</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </nav>

                                        <!-- Main content -->
                                        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex-1 flex items-center justify-center">
                                            <div class="text-center space-y-8 pt-16 sm:pt-20 md:pt-24">
                                                <!-- Badge -->
                                                <div class="inline-flex items-center justify-center animate-slide-up">
                                                    <span class="relative bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-md text-white px-8 py-3 rounded-full font-bold tracking-widest text-lg shadow-2xl border border-white/20 hover:border-white/40 transition-all duration-500 group">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-full blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <span class="relative">QUI SOMMES-NOUS ?</span>
                                                    </span>
                                                </div>

                                                <!-- Main heading -->
                                                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black mb-6 sm:mb-8 animate-slide-up-delay px-4">
                                                    <span class="bg-gradient-to-r from-white via-blue-100 to-indigo-200 bg-clip-text text-transparent drop-shadow-2xl block">
                                                        Votre Partenaire de Confiance
                                                    </span>
                                                    <span class="bg-gradient-to-r from-blue-200 via-white to-indigo-200 bg-clip-text text-transparent drop-shadow-2xl block">
                                                        depuis 2003
                                                    </span>
                                                </h1>

                                                <!-- Description -->
                                                <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 sm:mb-12 text-white/90 font-medium max-w-4xl mx-auto leading-relaxed animate-slide-up-delay-2 px-4">
                                                    AMES SARL, société béninoise spécialisée dans la représentation, l'importation et la distribution d'équipements médicaux de haute qualité pour améliorer les soins de santé au Bénin et en Afrique de l'Ouest.
                                                </p>

                                                <!-- CTA Buttons -->
                                                <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center animate-slide-up-delay-3 px-4 pb-4">
                                                    <a href="#about" class="group relative inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-white to-blue-50 text-blue-700 font-bold rounded-2xl shadow-2xl text-base sm:text-lg hover:shadow-blue-500/25 transition-all duration-500 transform hover:scale-105 hover:-translate-y-1 focus:ring-4 focus:ring-blue-300/50 w-full sm:w-auto">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <span class="relative flex items-center justify-center">
                                                            Découvrir notre histoire
                                                            <svg class="ml-2 sm:ml-3 h-5 w-5 sm:h-6 sm:w-6 text-blue-700 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a href="#contact" class="group relative inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 border-2 border-white/30 text-white rounded-2xl font-bold shadow-2xl text-base sm:text-lg backdrop-blur-md hover:bg-white/10 hover:border-white/50 transition-all duration-500 transform hover:scale-105 hover:-translate-y-1 focus:ring-4 focus:ring-white/30 w-full sm:w-auto">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <span class="relative">Nous contacter</span>
                                                    </a>
                                                </div>

                                                                                                <!-- Stats -->
                                                {{-- <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 mt-12 sm:mt-16 max-w-5xl mx-auto animate-slide-up-delay-4 mb-12 sm:mb-16 lg:mb-20">
                                                    <div class="group relative flex flex-col items-center p-4 sm:p-6 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105">
                                                        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-white mb-2 group-hover:text-blue-200 transition-colors duration-300">21+</span>
                                                        <span class="text-white/80 text-xs sm:text-sm md:text-base font-medium text-center">Années d'expérience</span>
                                                    </div>
                                                    <div class="group relative flex flex-col items-center p-4 sm:p-6 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105">
                                                        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-white mb-2 group-hover:text-blue-200 transition-colors duration-300">500+</span>
                                                        <span class="text-white/80 text-xs sm:text-sm md:text-base font-medium text-center">Équipements installés</span>
                                                    </div>
                                                    <div class="group relative flex flex-col items-center p-4 sm:p-6 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105">
                                                        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-white mb-2 group-hover:text-blue-200 transition-colors duration-300">200+</span>
                                                        <span class="text-white/80 text-xs sm:text-sm md:text-base font-medium text-center">Clients satisfaits</span>
                                                    </div>
                                                    <div class="group relative flex flex-col items-center p-4 sm:p-6 rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 transform hover:scale-105">
                                                        <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-white mb-2 group-hover:text-blue-200 transition-colors duration-300">50+</span>
                                                        <span class="text-white/80 text-xs sm:text-sm md:text-base font-medium text-center">Partenaires techniques</span>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>

                                        <style>
                                            @keyframes slide-up {
                                                from { opacity: 0; transform: translateY(60px); }
                                                to { opacity: 1; transform: translateY(0); }
                                            }
                                            @keyframes float {
                                                0%, 100% { transform: translateY(0px) rotate(0deg); }
                                                50% { transform: translateY(-20px) rotate(180deg); }
                                            }
                                            @keyframes float-delayed {
                                                0%, 100% { transform: translateY(0px) rotate(0deg); }
                                                50% { transform: translateY(-30px) rotate(-180deg); }
                                            }
                                            @keyframes float-slow {
                                                0%, 100% { transform: translateY(0px) rotate(0deg); }
                                                50% { transform: translateY(-15px) rotate(90deg); }
                                            }
                                            @keyframes float-delayed-2 {
                                                0%, 100% { transform: translateY(0px) rotate(0deg); }
                                                50% { transform: translateY(-25px) rotate(-90deg); }
                                            }

                                            .animate-slide-up { animation: slide-up 1.2s cubic-bezier(0.4, 0, 0.2, 1) both; }
                                            .animate-slide-up-delay { animation: slide-up 1.2s 0.2s cubic-bezier(0.4, 0, 0.2, 1) both; }
                                            .animate-slide-up-delay-2 { animation: slide-up 1.2s 0.4s cubic-bezier(0.4, 0, 0.2, 1) both; }
                                            .animate-slide-up-delay-3 { animation: slide-up 1.2s 0.6s cubic-bezier(0.4, 0, 0.2, 1) both; }
                                            .animate-slide-up-delay-4 { animation: slide-up 1.2s 0.8s cubic-bezier(0.4, 0, 0.2, 1) both; }
                                            .animate-slide-up-delay-5 { animation: slide-up 1.2s 1s cubic-bezier(0.4, 0, 0.2, 1) both; }

                                            .animate-float { animation: float 6s ease-in-out infinite; }
                                            .animate-float-delayed { animation: float-delayed 8s ease-in-out infinite; }
                                            .animate-float-slow { animation: float-slow 10s ease-in-out infinite; }
                                            .animate-float-delayed-2 { animation: float-delayed-2 7s ease-in-out infinite; }
                                        </style>
                                    </section>

            <!-- Main content container for other sections -->
            <div class="relative w-full max-w-2xl lg:max-w-7xl">
                                                    <!-- About Section -->
                                    <section id="about" class="relative py-20 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-blue-900 dark:to-indigo-900 overflow-hidden">
                                        <!-- Background decorative elements -->
                                        <div class="absolute inset-0">
                                            <div class="absolute top-20 left-10 w-32 h-32 bg-blue-200/20 dark:bg-blue-400/10 rounded-full blur-3xl animate-float-slow"></div>
                                            <div class="absolute bottom-20 right-10 w-40 h-40 bg-indigo-200/20 dark:bg-indigo-400/10 rounded-full blur-3xl animate-float-delayed"></div>
                                            <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-blue-300/15 dark:bg-blue-500/10 rounded-full blur-2xl animate-float"></div>
                                        </div>

                                        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
                                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                                                <!-- Content -->
                                                <div class="space-y-8 animate-slide-up">
                                                    <div class="inline-flex items-center">
                                                        <span class="relative bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-full font-bold text-sm tracking-wider shadow-lg border border-blue-500/20 group">
                                                            <span class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-full blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                            <span class="relative">Qui sommes-nous ?</span>
                                                        </span>
                                                    </div>

                                                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-black bg-gradient-to-r from-gray-900 via-blue-800 to-indigo-800 dark:from-white dark:via-blue-200 dark:to-indigo-200 bg-clip-text text-transparent leading-tight">
                                                        AMES SARL, votre partenaire de confiance depuis 2003
                                                    </h2>

                                                    <p class="text-lg sm:text-xl text-gray-700 dark:text-gray-300 leading-relaxed font-medium">
                                                        Société béninoise située à Cadjehoun Kpota Cotonou, AMES SARL représente, importe et distribue les équipements médicaux, consommables et réactifs de laboratoire pour le diagnostic in vitro.
                                                    </p>

                                                    <!-- Services grid -->
                                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                        <div class="group flex items-center space-x-4 p-4 rounded-2xl bg-white/60 dark:bg-gray-800/60 backdrop-blur-md border border-white/20 dark:border-gray-700/20 hover:bg-white/80 dark:hover:bg-gray-800/80 transition-all duration-500 transform hover:scale-105">
                                                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-blue-500/25 transition-all duration-500">
                                                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4"/>
                                                                    <circle cx="12" cy="12" r="10"/>
                                                                </svg>
                                                            </div>
                                                            <span class="text-gray-800 dark:text-gray-200 font-semibold">Équipements médicaux</span>
                                                        </div>

                                                        <div class="group flex items-center space-x-4 p-4 rounded-2xl bg-white/60 dark:bg-gray-800/60 backdrop-blur-md border border-white/20 dark:border-gray-700/20 hover:bg-white/80 dark:hover:bg-gray-800/80 transition-all duration-500 transform hover:scale-105">
                                                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-indigo-500/25 transition-all duration-500">
                                                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4"/>
                                                                    <circle cx="12" cy="12" r="10"/>
                                                                </svg>
                                                            </div>
                                                            <span class="text-gray-800 dark:text-gray-200 font-semibold">Imagerie médicale</span>
                                                        </div>

                                                        <div class="group flex items-center space-x-4 p-4 rounded-2xl bg-white/60 dark:bg-gray-800/60 backdrop-blur-md border border-white/20 dark:border-gray-700/20 hover:bg-white/80 dark:hover:bg-gray-800/80 transition-all duration-500 transform hover:scale-105">
                                                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-purple-500/25 transition-all duration-500">
                                                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4"/>
                                                                    <circle cx="12" cy="12" r="10"/>
                                                                </svg>
                                                            </div>
                                                            <span class="text-gray-800 dark:text-gray-200 font-semibold">Matériel de laboratoire</span>
                                                        </div>

                                                        <div class="group flex items-center space-x-4 p-4 rounded-2xl bg-white/60 dark:bg-gray-800/60 backdrop-blur-md border border-white/20 dark:border-gray-700/20 hover:bg-white/80 dark:hover:bg-gray-800/80 transition-all duration-500 transform hover:scale-105">
                                                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-pink-500 to-red-500 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-pink-500/25 transition-all duration-500">
                                                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4-4"/>
                                                                    <circle cx="12" cy="12" r="10"/>
                                                                </svg>
                                                            </div>
                                                            <span class="text-gray-800 dark:text-gray-200 font-semibold">Maintenance &amp; SAV</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Stats -->
                                                <div class="grid grid-cols-2 gap-6 animate-slide-up-delay">
                                                    <div class="group relative text-center p-6 sm:p-8 rounded-3xl bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border border-white/30 dark:border-gray-700/30 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                        <div class="relative">
                                                            <div class="text-3xl sm:text-4xl lg:text-5xl font-black bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-3">21+</div>
                                                            <p class="text-gray-600 dark:text-gray-400 font-semibold text-sm sm:text-base">Années d'expérience</p>
                                                        </div>
                                                    </div>

                                                    <div class="group relative text-center p-6 sm:p-8 rounded-3xl bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border border-white/30 dark:border-gray-700/30 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                        <div class="relative">
                                                            <div class="text-3xl sm:text-4xl lg:text-5xl font-black bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-3">500+</div>
                                                            <p class="text-gray-600 dark:text-gray-400 font-semibold text-sm sm:text-base">Équipements installés</p>
                                                        </div>
                                                    </div>

                                                    <div class="group relative text-center p-6 sm:p-8 rounded-3xl bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border border-white/30 dark:border-gray-700/30 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                        <div class="relative">
                                                            <div class="text-3xl sm:text-4xl lg:text-5xl font-black bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-3">200+</div>
                                                            <p class="text-gray-600 dark:text-gray-400 font-semibold text-sm sm:text-base">Clients satisfaits</p>
                                                        </div>
                                                    </div>

                                                    <div class="group relative text-center p-6 sm:p-8 rounded-3xl bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border border-white/30 dark:border-gray-700/30 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500/10 to-red-500/10 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                        <div class="relative">
                                                            <div class="text-3xl sm:text-4xl lg:text-5xl font-black bg-gradient-to-r from-pink-600 to-red-600 bg-clip-text text-transparent mb-3">50+</div>
                                                            <p class="text-gray-600 dark:text-gray-400 font-semibold text-sm sm:text-base">Partenaires techniques</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>






                                    <!-- Mission & Vision Section -->
                                    <section class="relative py-20 bg-gradient-to-br from-white via-gray-50 to-blue-50 dark:from-gray-800 dark:via-gray-900 dark:to-blue-900 overflow-hidden">
                                        <!-- Background decorative elements -->
                                        <div class="absolute inset-0">
                                            <div class="absolute top-20 right-10 w-32 h-32 bg-blue-200/20 dark:bg-blue-400/10 rounded-full blur-3xl animate-float-slow"></div>
                                            <div class="absolute bottom-20 left-10 w-40 h-40 bg-indigo-200/20 dark:bg-indigo-400/10 rounded-full blur-3xl animate-float-delayed"></div>
                                        </div>

                                        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
                                            <div class="text-center space-y-12 animate-slide-up">
                                                <!-- Badge -->
                                                <div class="inline-flex items-center">
                                                    <span class="relative bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-full font-bold text-sm tracking-wider shadow-lg border border-blue-500/20 group">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-full blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <span class="relative">Notre Mission & Vision</span>
                                                    </span>
                                                </div>

                                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                                                    <!-- Mission -->
                                                    <div class="group relative p-8 rounded-3xl bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border border-white/30 dark:border-gray-700/30 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                        <div class="relative">
                                                            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                                </svg>
                                                            </div>
                                                            <h3 class="text-2xl font-black bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent mb-4">Notre Mission</h3>
                                                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed font-medium">
                                                                Améliorer l'accès aux soins de santé de qualité au Bénin et en Afrique de l'Ouest en fournissant des équipements médicaux de pointe, des consommables fiables et des réactifs de laboratoire de haute qualité pour un diagnostic précis et efficace.
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Vision -->
                                                    <div class="group relative p-8 rounded-3xl bg-white/70 dark:bg-gray-800/70 backdrop-blur-md border border-white/30 dark:border-gray-700/30 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-2">
                                                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10 rounded-3xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                        <div class="relative">
                                                            <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                                                                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                                </svg>
                                                            </div>
                                                            <h3 class="text-2xl font-black bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent mb-4">Notre Vision</h3>
                                                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed font-medium">
                                                                Devenir le leader incontournable de la distribution d'équipements médicaux en Afrique de l'Ouest, reconnu pour notre expertise technique, notre service client exceptionnel et notre contribution à l'amélioration des soins de santé dans la région.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- CTA Section -->
                                    <section id="contact" class="relative py-20 bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 overflow-hidden">
                                        <!-- Background decorative elements -->
                                        <div class="absolute inset-0">
                                            <div class="absolute top-10 left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl animate-float-slow"></div>
                                            <div class="absolute bottom-10 right-10 w-32 h-32 bg-blue-400/20 rounded-full blur-3xl animate-float-delayed"></div>
                                            <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-indigo-400/15 rounded-full blur-2xl animate-float"></div>
                                        </div>

                                        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8">
                                            <div class="text-center space-y-12 animate-slide-up">
                                                <!-- Badge -->
                                                <div class="inline-flex items-center">
                                                    <span class="relative bg-gradient-to-r from-white/20 to-white/10 backdrop-blur-md text-white px-6 py-3 rounded-full font-bold text-sm tracking-wider shadow-lg border border-white/20 group">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-full blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <span class="relative">Partenariat & Contact</span>
                                                    </span>
                                                </div>

                                                <!-- Main Content -->
                                                <div class="max-w-5xl mx-auto space-y-8">
                                                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black bg-gradient-to-r from-white via-blue-100 to-indigo-200 bg-clip-text text-transparent leading-tight">
                                                        Nous travaillons en partenariat avec tous les grands fournisseurs
                                                    </h2>

                                                    <p class="text-lg sm:text-xl md:text-2xl text-white/90 font-medium max-w-3xl mx-auto leading-relaxed">
                                                        Contactez-nous pour une entière satisfaction !
                                                    </p>

                                                    <!-- Stats -->
                                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-2xl mx-auto pt-8">
                                                        <div class="text-center">
                                                            <div class="text-2xl sm:text-3xl font-black text-white mb-2">24/7</div>
                                                            <div class="text-white/80 text-sm font-medium">Support client</div>
                                                        </div>
                                                        <div class="text-center">
                                                            <div class="text-2xl sm:text-3xl font-black text-white mb-2">48h</div>
                                                            <div class="text-white/80 text-sm font-medium">Délai de réponse</div>
                                                        </div>
                                                        <div class="text-center">
                                                            <div class="text-2xl sm:text-3xl font-black text-white mb-2">100%</div>
                                                            <div class="text-white/80 text-sm font-medium">Satisfaction</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- CTA Buttons -->
                                                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
                                                    <a href="tel:+229XXXXXXXX" class="group relative inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl font-bold shadow-2xl text-lg backdrop-blur-md hover:bg-white/10 hover:border-white/50 transition-all duration-500 transform hover:scale-105 hover:-translate-y-1 focus:ring-4 focus:ring-white/30 w-full sm:w-auto">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <svg class="mr-3 h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M22 16.92V19a2 2 0 0 1-2.18 2A19.72 19.72 0 0 1 3 5.18 2 2 0 0 1 5 3h2.09a2 2 0 0 1 2 1.72c.13 1.13.37 2.23.72 3.28a2 2 0 0 1-.45 2.11l-1.27 1.27a16 16 0 0 0 6.29 6.29l1.27-1.27a2 2 0 0 1 2.11-.45c1.05.35 2.15.59 3.28.72A2 2 0 0 1 22 16.92z"/>
                                                        </svg>
                                                        <span class="relative">Appel direct</span>
                                                    </a>
                                                    <a href="#" class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-white to-blue-50 text-blue-700 font-bold rounded-2xl shadow-2xl text-lg hover:shadow-blue-500/25 transition-all duration-500 transform hover:scale-105 hover:-translate-y-1 focus:ring-4 focus:ring-blue-300/50 w-full sm:w-auto">
                                                        <span class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 rounded-2xl blur opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                                                        <span class="relative flex items-center justify-center">
                                                        Demander un devis
                                                            <svg class="ml-3 h-6 w-6 text-blue-700 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                            <!-- Footer -->
                            <footer class="relative bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 text-white overflow-hidden">
                                <!-- Background decorative elements -->
                                <div class="absolute inset-0">
                                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/10 to-indigo-600/10"></div>
                                    <div class="absolute top-20 right-20 w-32 h-32 bg-white/5 rounded-full blur-3xl animate-float-slow"></div>
                                    <div class="absolute bottom-20 left-20 w-40 h-40 bg-blue-400/10 rounded-full blur-3xl animate-float-delayed"></div>
                                </div>

                                <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 py-16">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                                        <!-- Company Info -->
                                        <div class="lg:col-span-2 space-y-6">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center">
                                                    <span class="text-xl font-black text-white">A</span>
                                                </div>
                                                <h3 class="text-2xl font-black bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">AMES MED EQUIPEMENTS</h3>
                                            </div>
                                            <p class="text-white/80 leading-relaxed max-w-md">
                                                Société béninoise spécialisée dans la représentation, l'importation et la distribution d'équipements médicaux, consommables et réactifs de laboratoire pour le diagnostic in vitro.
                                            </p>
                                            <div class="flex space-x-4">
                                                <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                                    </svg>
                                                </a>
                                                <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-white/20 transition-all duration-300 transform hover:scale-110">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Quick Links -->
                                        <div class="space-y-6">
                                            <h4 class="text-lg font-bold text-white">Liens Rapides</h4>
                                            <ul class="space-y-3">
                                                <li><a href="#produits" class="text-white/80 hover:text-white transition-colors duration-300">Nos Produits</a></li>
                                                <li><a href="#contact" class="text-white/80 hover:text-white transition-colors duration-300">Contact</a></li>
                                                <li><a href="#" class="text-white/80 hover:text-white transition-colors duration-300">À Propos</a></li>
                                                <li><a href="#" class="text-white/80 hover:text-white transition-colors duration-300">Services</a></li>
                                            </ul>
                                        </div>

                                        <!-- Contact Info -->
                                        <div class="space-y-6">
                                            <h4 class="text-lg font-bold text-white">Contact</h4>
                                            <div class="space-y-3">
                                                <div class="flex items-center space-x-3">
                                                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    </svg>
                                                    <span class="text-white/80 text-sm">Cadjehoun Kpota, Cotonou</span>
                                                </div>
                                                <div class="flex items-center space-x-3">
                                                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                    </svg>
                                                    <span class="text-white/80 text-sm">+229 XX XX XX XX</span>
                                                </div>
                                                <div class="flex items-center space-x-3">
                                                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                    </svg>
                                                    <span class="text-white/80 text-sm">contact@ames.bj</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bottom Bar -->
                                    <div class="border-t border-white/10 mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center">
                                        <p class="text-white/60 text-sm">
                                            © {{ date('Y') }} AMES SARL. Tous droits réservés.
                                        </p>
                                        <div class="flex space-x-6 mt-4 sm:mt-0">
                                            <a href="#" class="text-white/60 hover:text-white text-sm transition-colors duration-300">Mentions Légales</a>
                                            <a href="#" class="text-white/60 hover:text-white text-sm transition-colors duration-300">Politique de Confidentialité</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>
            </div>
        </div>

        <!-- JavaScript for Mobile Menu -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                let isMenuOpen = false;

                mobileMenuButton.addEventListener('click', function() {
                    isMenuOpen = !isMenuOpen;

                    if (isMenuOpen) {
                        mobileMenu.classList.remove('opacity-0', 'invisible', 'translate-y-[-10px]');
                        mobileMenu.classList.add('opacity-100', 'visible', 'translate-y-0');

                        // Change icon to X
                        mobileMenuButton.innerHTML = `
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        `;
                    } else {
                        mobileMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                        mobileMenu.classList.add('opacity-0', 'invisible', 'translate-y-[-10px]');

                        // Change icon back to hamburger
                        mobileMenuButton.innerHTML = `
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        `;
                    }
                });

                // Close menu when clicking on a link
                const mobileMenuLinks = mobileMenu.querySelectorAll('a');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        isMenuOpen = false;
                        mobileMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                        mobileMenu.classList.add('opacity-0', 'invisible', 'translate-y-[-10px]');

                        // Change icon back to hamburger
                        mobileMenuButton.innerHTML = `
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        `;
                    });
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target) && isMenuOpen) {
                        isMenuOpen = false;
                        mobileMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                        mobileMenu.classList.add('opacity-0', 'invisible', 'translate-y-[-10px]');

                        // Change icon back to hamburger
                        mobileMenuButton.innerHTML = `
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        `;
                    }
                });
            });
        </script>

</body>
</html>
