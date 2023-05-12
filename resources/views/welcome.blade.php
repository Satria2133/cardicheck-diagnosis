<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Diagnostic</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <div>
        <link href="./mac-book-air1.css" rel="stylesheet" />
        <div class="mac-book-air1-container">
          <div class="mac-book-air1-mac-book-air1">
            <img
              src="/playground_assets/ellipse258168-6ko-200h.png"
              alt="Ellipse258168"
              class="mac-book-air1-ellipse25"
            />
            <span class="mac-book-air1-text Display2xlBold">
              <span class="mac-book-air1-text01">
                <span>We help you for better life</span>
                <br />
                <span></span>
              </span>
              <span>and best heart life</span>
            </span>
            <div class="mac-book-air1-group741">
              <div class="mac-book-air1-group738">
                <div class="mac-book-air1-group736">
                  <div class="mac-book-air1-group735">
                    <div class="mac-book-air1-group10">
                      <img
                        src="/playground_assets/ellipse25497-l54-200h.png"
                        alt="Ellipse25497"
                        class="mac-book-air1-ellipse2"
                      />
                      <img
                        src="/playground_assets/ellipse15497-46xo-200h.png"
                        alt="Ellipse15497"
                        class="mac-book-air1-ellipse1"
                      />
                      <img
                        src="/playground_assets/rectangle15497-yd7k-200h.png"
                        alt="Rectangle15497"
                        class="mac-book-air1-rectangle1"
                      />
                    </div>
                    <div class="mac-book-air1-group11">
                      <img
                        src="/playground_assets/ellipse25497-ugpd-200h.png"
                        alt="Ellipse25497"
                      />
                      <img
                        src="/playground_assets/ellipse15497-ypqa9-200h.png"
                        alt="Ellipse15497"
                      />
                      <img
                        src="/playground_assets/rectangle15497-p0sv-200h.png"
                        alt="Rectangle15497"
                      />
                    </div>
                    <img
                      src="/playground_assets/ellipse95497-hfok-200h.png"
                      alt="Ellipse95497"
                      class="mac-book-air1-ellipse9"
                    />
                  </div>
                </div>
                <span class="mac-book-air1-text06 DisplaysBold">
                  <span class="mac-book-air1-text07">Cardio</span>
                  <span>Check</span>
                </span>
              </div>
              <span class="mac-book-air1-text09">
                <span>
                  Check your heart condition! Please fill in the data below.
                </span>
              </span>
              <div class="mac-book-air1-group740">
                <div class="mac-book-air1-data3">
                  <span class="mac-book-air1-text11"><span>Name</span></span>
                  <div class="mac-book-air1-frame2">
                    <span class="mac-book-air1-text13"><span>Name</span></span>
                  </div>
                </div>
                <div class="mac-book-air1-data2">
                  <span class="mac-book-air1-text15"><span>Old</span></span>
                  <div class="mac-book-air1-frame21">
                    <span class="mac-book-air1-text17"><span>Old</span></span>
                  </div>
                </div>
                <div class="mac-book-air1-data20">
                  <div class="mac-book-air1-dropdown">
                    <span class="mac-book-air1-text19"><span>Female</span></span>
                    <div class="mac-book-air1-icon-arrowarrowdown">
                      <div class="mac-book-air1-vuesaxlineararrowdown">
                        <div class="mac-book-air1-arrowdown">
                          <img
                            src="/playground_assets/vectori668-uf5.svg"
                            alt="VectorI668"
                            class="mac-book-air1-vector"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <span class="mac-book-air1-text21"><span>Gender</span></span>
                </div>
                <div class="mac-book-air1-data11">
                  <span class="mac-book-air1-text23"><span>Height</span></span>
                  <div class="mac-book-air1-frame22">
                    <span class="mac-book-air1-text25"><span>Height</span></span>
                  </div>
                </div>
                <div class="mac-book-air1-data12">
                  <span class="mac-book-air1-text27"><span>Weight</span></span>
                  <div class="mac-book-air1-frame23">
                    <span class="mac-book-air1-text29"><span>Weight</span></span>
                  </div>
                </div>
              </div>
              <div class="mac-book-air1-group739">
                <img
                  src="/playground_assets/rectangle11687-z76q-200h.png"
                  alt="Rectangle11687"
                  class="mac-book-air1-rectangle11"
                />
                <img
                  src="/playground_assets/rectangle12688-el2f-200h.png"
                  alt="Rectangle12688"
                  class="mac-book-air1-rectangle12"
                />
              </div>
              <div class="mac-book-air1-frame3">
                <div class="mac-book-air1-icon-arrowarrowright">
                  <div class="mac-book-air1-vuesaxlineararrowright">
                    <div class="mac-book-air1-arrowright">
                      <img
                        src="/playground_assets/vectori692-xvgz.svg"
                        alt="VectorI692"
                        class="mac-book-air1-vector1"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img
              src="/playground_assets/ellipse168144-pu4-200h.png"
              alt="Ellipse168144"
              class="mac-book-air1-ellipse16"
            />
            <img
              src="/playground_assets/ellipse208160-keqr-200h.png"
              alt="Ellipse208160"
              class="mac-book-air1-ellipse20"
            />
            <img
              src="/playground_assets/ellipse248167-owjh-200h.png"
              alt="Ellipse248167"
              class="mac-book-air1-ellipse24"
            />
            <img
              src="/playground_assets/ellipse188146-q32j-200h.png"
              alt="Ellipse188146"
              class="mac-book-air1-ellipse18"
            />
            <img
              src="/playground_assets/ellipse178145-myn-200h.png"
              alt="Ellipse178145"
              class="mac-book-air1-ellipse17"
            />
            <img
              src="/playground_assets/ellipse238166-ndwh-200h.png"
              alt="Ellipse238166"
              class="mac-book-air1-ellipse23"
            />
            <img
              src="/playground_assets/ellipse198147-egy1-200h.png"
              alt="Ellipse198147"
              class="mac-book-air1-ellipse19"
            />
            <div class="mac-book-air1-frame749">
              <div class="mac-book-air1-group748">
                <div class="mac-book-air1-group744">
                  <div class="mac-book-air1-group742">
                    <img
                      src="/playground_assets/ellipse168128-ff2-200w.png"
                      alt="Ellipse168128"
                      class="mac-book-air1-ellipse161"
                    />
                    <img
                      src="/playground_assets/ellipse178130-jr3r-200h.png"
                      alt="Ellipse178130"
                      class="mac-book-air1-ellipse171"
                    />
                    <img
                      src="/playground_assets/rectangle148129-ic4s-200w.png"
                      alt="Rectangle148129"
                      class="mac-book-air1-rectangle14"
                    />
                  </div>
                  <div class="mac-book-air1-group743">
                    <img
                      src="/playground_assets/ellipse168133-vp0n-200w.png"
                      alt="Ellipse168133"
                      class="mac-book-air1-ellipse162"
                    />
                    <img
                      src="/playground_assets/ellipse178134-283-200w.png"
                      alt="Ellipse178134"
                      class="mac-book-air1-ellipse172"
                    />
                    <img
                      src="/playground_assets/rectangle148135-imub-200w.png"
                      alt="Rectangle148135"
                      class="mac-book-air1-rectangle141"
                    />
                  </div>
                  <img
                    src="/playground_assets/ellipse188137-y57f-200h.png"
                    alt="Ellipse188137"
                    class="mac-book-air1-ellipse181"
                  />
                </div>
                <span class="mac-book-air1-text31 DisplaysBold">
                  <span>CardiCheck</span>
                </span>
              </div>
              <div class="mac-book-air1-group747">
                <span class="mac-book-air1-text33 DisplaysBold">
                  <span>Home</span>
                </span>
                <span class="mac-book-air1-text35 DisplaysBold">
                  <span>Health</span>
                </span>
              </div>
            </div>
            <div class="mac-book-air1-group746">
              <img
                src="/playground_assets/ellipse208157-oafm-600h.png"
                alt="Ellipse208157"
                class="mac-book-air1-ellipse201"
              />
              <div class="mac-book-air1-maskgroup">
                <img
                  src="/playground_assets/ellipse118118-wz58-600h.png"
                  alt="Ellipse118118"
                  class="mac-book-air1-ellipse11"
                />
                <img
                  src="/playground_assets/unsplash279xihympyyremovebgpreview18154-1qs-700h.png"
                  alt="unsplash279xIHymPYYremovebgpreview18154"
                  class="mac-book-air1-unsplash279x--hym-p-yremovebgpreview1"
                />
              </div>
            </div>
            <img
              src="/playground_assets/ellipse218161-jkjr-200h.png"
              alt="Ellipse218161"
              class="mac-book-air1-ellipse21"
            />
            <img
              src="/playground_assets/ellipse261117-12dv-200w.png"
              alt="Ellipse261117"
              class="mac-book-air1-ellipse26"
            />
            <img
              src="/playground_assets/ellipse311119-crxi-200w.png"
              alt="Ellipse311119"
              class="mac-book-air1-ellipse31"
            />
            <img
              src="/playground_assets/ellipse271117-fpfj-200h.png"
              alt="Ellipse271117"
              class="mac-book-air1-ellipse27"
            />
            <img
              src="/playground_assets/ellipse321120-i9u-200h.png"
              alt="Ellipse321120"
              class="mac-book-air1-ellipse32"
            />
            <img
              src="/playground_assets/ellipse341121-xyzb-200h.png"
              alt="Ellipse341121"
              class="mac-book-air1-ellipse34"
            />
            <img
              src="/playground_assets/ellipse351121-1fxn-200h.png"
              alt="Ellipse351121"
              class="mac-book-air1-ellipse35"
            />
            <img
              src="/playground_assets/ellipse361121-u8dt-200h.png"
              alt="Ellipse361121"
              class="mac-book-air1-ellipse36"
            />
            <img
              src="/playground_assets/ellipse331120-1sn4-200w.png"
              alt="Ellipse331120"
              class="mac-book-air1-ellipse33"
            />
            <img
              src="/playground_assets/ellipse281117-yvsr-200h.png"
              alt="Ellipse281117"
              class="mac-book-air1-ellipse28"
            />
            <img
              src="/playground_assets/ellipse291117-gjyfg-200h.png"
              alt="Ellipse291117"
              class="mac-book-air1-ellipse29"
            />
            <img
              src="/playground_assets/ellipse301118-y29-200h.png"
              alt="Ellipse301118"
              class="mac-book-air1-ellipse30"
            />
            <img
              src="/playground_assets/ellipse228165-skwf-200h.png"
              alt="Ellipse228165"
              class="mac-book-air1-ellipse22"
            />
            <div class="mac-book-air1-group750">
              <img
                src="/playground_assets/rectangle188153-qazs-300w.png"
                alt="Rectangle188153"
                class="mac-book-air1-rectangle18"
              />
              <img
                src="/playground_assets/rectangle178152-k12r-300w.png"
                alt="Rectangle178152"
                class="mac-book-air1-rectangle17"
              />
              <div class="mac-book-air1-group749">
                <img
                  src="/playground_assets/rectangle168151-s6zp-400w.png"
                  alt="Rectangle168151"
                  class="mac-book-air1-rectangle16"
                />
                <div class="mac-book-air1-maskgroup1">
                  <img
                    src="/playground_assets/unsplasheuscghwuzwremovebgpreview18172-u7al-900w.png"
                    alt="unsplasheUSCGHWuZwremovebgpreview18172"
                    class="mac-book-air1-unsplashe-uscg-wu-zwremovebgpreview1"
                  />
                </div>
              </div>
            </div>
            <div class="mac-book-air1-frame750">
              <span class="mac-book-air1-text37 DisplaysmRegular1">
                <span>Try</span>
              </span>
            </div>
            <span class="mac-book-air1-text39">
              <span>
                Here are the results of the diagnosis that we have analyzed.
                Don&apos;t forget to visit a doctor for further treatment.
              </span>
            </span>
            <span class="mac-book-air1-text41 DisplaymdSemibold">
              <span>The result of analysis</span>
            </span>
            <span class="mac-book-air1-text43">
              <span>
                Here are the risk of the diagnosis that we have analyzed. Don&apos;t
                forget to visit a doctor for further treatment.
              </span>
            </span>
            <span class="mac-book-air1-text45 DisplaymdSemibold">
              <span>The risk of analysis</span>
            </span>
            <span class="mac-book-air1-text47">
              <span>
                Here are the risk of the diagnosis that we have analyzed. Don&apos;t
                forget to visit a doctor for further treatment.
              </span>
            </span>
            <span class="mac-book-air1-text49 DisplaymdSemibold">
              <span>The solution of analysis</span>
            </span>
            <img
              src="/playground_assets/rectangle201119-rk55-700w.png"
              alt="Rectangle201119"
              class="mac-book-air1-rectangle20"
            />
            <span class="mac-book-air1-text51">
              <span>
                Here are the results of the diagnosis that we have analyzed.
                Don&apos;t forget to visit a doctor for further treatment.
              </span>
            </span>
            <img
              src="/playground_assets/rectangle211120-1rin-700w.png"
              alt="Rectangle211120"
              class="mac-book-air1-rectangle21"
            />
            <span class="mac-book-air1-text53">
              <span>
                Here are the risk of the diagnosis that we have analyzed. Don&apos;t
                forget to visit a doctor for further treatment.
              </span>
            </span>
            <span class="mac-book-air1-text55">
              <span>
                Here are the solutions of the diagnosis that we have analyzed.
                Don&apos;t forget to visit a doctor for further treatment.
              </span>
            </span>
            <img
              src="/playground_assets/rectangle221120-1cvp-700w.png"
              alt="Rectangle221120"
              class="mac-book-air1-rectangle22"
            />
          </div>
        </div>
      </div>
          </body>
</html>
