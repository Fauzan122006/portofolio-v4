<x-layout :title="'Home'">
    <div class="container text-white ">
        <div class="hero lg:flex ml-20" id="hero">
            <div class="hero-img flex">
                <img src="{{ asset('asset/img/Gradient.svg') }}" alt="" class="w-96 h-96 ml-10">
                <img src="{{ asset('asset/img/hero.webp') }}" alt="" class="mix-blend-lighten w-80 h-80 -ml-[350px] mt-10">
                <div class="text -ml-24">
                <img src="{{ asset('asset/img/Arrow.svg') }}" alt="" class="">
                <h2 class="-mt-24 ml-28 font-">HelloWorld! I'm <span class="text-blue-400">Moh. Fauzan</span></h2>
                </div>
            </div>
            <div class="desk lg:inline-flex justify-center items-center max-w-4xl -ml-40">
                <p class="whitespace-pre-line">A fresh graduate passionate about web development and game design.
                    I enjoy turning ideas into simple websites using PHP MVC and Tailwind.
                    During my internship at Diskominfo, I got hands-on experience with live streaming and podcast setups which taught me a lot about tech beyond just code.

                    I may be just starting out, but I'm eager to keep learning, building, and growing as a future software developer.
                </p>
                <div class="button flex relative -left-24 top-6">
                    <a href="" class="btn bg-cyan-900/30 backdrop-blur-md relative -left-[555px] top-32 text-white"><span class="icon-[ri--github-fill] size-6.5 shrink-0"></span>Github</a>
                <a href="" class="btn bg-red-900/30 backdrop-blur-md relative -left-[550px] top-32 text-white"><span class="icon-[logos--youtube-icon] size-6.5 shrink-0"></span>YouTube</a>
                </div>
            </div>
        </div>
        <div class="skill">
            <p class="flex justify-center mt-20">I'm currently learning web development and practicing my skills in building responsive and accessible websites.</p>
            <div class="skill-group flex justify-center gap-5 mt-10">
                <button class="btn btn-circle btn-gradient btn-accent p-7" aria-label="Circle Gradient Icon Button"> <span class="icon-[vscode-icons--file-type-html] size-10.5 shrink-0"></span></button>
                <button class="btn btn-circle btn-gradient btn-accent p-7" aria-label="Circle Gradient Icon Button"> <span class="icon-[vscode-icons--file-type-css2] size-10.5 shrink-0"></span></button>
                <button class="btn btn-circle btn-gradient btn-accent p-7" aria-label="Circle Gradient Icon Button"> <span class="icon-[devicon--tailwindcss] size-10.5 shrink-0"></span></button>
                <button class="btn btn-circle btn-gradient btn-accent p-7" aria-label="Circle Gradient Icon Button"> <span class="icon-[devicon--bootstrap] size-10.5 shrink-0"></span></button>
                <button class="btn btn-circle btn-gradient btn-accent p-7" aria-label="Circle Gradient Icon Button"> <span class="icon-[devicon--php] size-10.5 shrink-0"></span></button>
                <button class="btn btn-circle btn-gradient btn-accent p-7" aria-label="Circle Gradient Icon Button"> <span class="icon-[logos--laravel] size-10.5 shrink-0"></span></button>
            </div>
            <div>
                <div class="flex relative justify-center ">
                    <img src="{{ asset('asset/img/Vector 28.svg') }}"flex class=" relative left-[100px]" alt="">
                    <img src="{{ asset('asset/img/Vector 29.svg') }}"flex class=" relative left-[30px]" alt="">
                    <img src="{{ asset('asset/img/Vector 30.svg') }}"flex class=" relative left-[20px]" alt="">
                    <img src="{{ asset('asset/img/Vector 27.svg') }}"flex class=" relative left-[15px] -top-1" alt="">
                    <img src="{{ asset('asset/img/Vector 26.svg') }}"flex class=" relative -left-[10px] -top-4" alt="">
                    <img src="{{ asset('asset/img/Vector 25.svg') }}"flex class=" relative -left-[100px] -top-4" alt="">
                </div>
            </div>
        </div>
        <div class="">
            <img src="{{ asset('asset/img/logo.svg') }}" flex class="justify-center items-center mx-auto -mt-20" alt="">
            <img src="{{ asset('asset/img/Logo-ellipse-dalam.svg') }}" flex class="justify-center items-center mx-auto -mt-72" alt="">
            <img src="{{ asset('asset/img/Logo-ellipse-luar.svg') }}" flex class="justify-center items-center mx-auto -mt-72" alt="">
            <img src="{{ asset('asset/img/Ellipse 6.svg') }}" flex class="justify-center items-center mx-auto -mt-72 opacity-50" alt="">
        </div>
        <div class="project">
        </div>
    </div>
</x-layout>
