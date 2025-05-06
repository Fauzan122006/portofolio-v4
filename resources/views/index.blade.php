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
            <div class="desk lg:inline-flex justify-center items-center max-w-2xl -ml-40">
                <p class="whitespace-pre-line">A fresh graduate passionate about web development and game design.
                    I enjoy turning ideas into simple websites using PHP MVC and Tailwind.
                    During my internship at Diskominfo, I got hands-on experience with live streaming and podcast setups which taught me a lot about tech beyond just code.

                    I may be just starting out, but I'm eager to keep learning, building, and growing as a future software developer.
                </p>
                <button class="btn [--btn-color:#2b3137] text-white" >
                    <span class="icon-[tabler--brand-github] size-4.5 shrink-0"></span> Github
                  </button>
            </div>
            <img src="{{ asset('asset/img/down-arrow-symbol.gif') }}" alt="" class="mix-blend-lighten w-[100px] h-20 mt-20">
        </div>
    </div>
</x-layout>
