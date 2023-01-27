<x-site-layout>
    <div class="">
        <img class="bannerimg" src="https://www.thinkwood.com/wp-content/uploads/2020/08/01-franklin-elementary-exterior.jpg">
        <div class="h-[400px] flex items-center justify-center">
            <p class="text-5xl font-bold">Welcome to <span class="text-[#0066ff]">{{$tenant->name}}</span></p>
        </div>
    </div>


    <style>
        .bannerimg {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>


</x-site-layout>

