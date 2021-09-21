<x-app-layout>
    <x-slot name="header">
        <strong>Dashboard</strong>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <strong>Muslim Education Secretariat-Western Province</strong>
                    <div class="mt-2">
                        Muslim Education Secretariat-Western Province (MESWEP) is the official representative of Muslim Education Council (MEC)
                        in Kakamega, Bungoma, Busia and Vihiga and consequently, the official sponsor of all Muslim Educational Institutions in
                         this region in accordance with Article 53 of the Constitution of Kenya.         
                    </div>
                    <div class="slideshow flex my-5" style="justify-content:center;">
                        <img src="{{ asset('previous.svg') }}" style="border-radius:10px;">
                        <img src="{{ asset('media/kakamega1.jfif') }}" style="border-radius:10px;">
                        <img src="{{ asset('next.svg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>