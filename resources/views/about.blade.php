<x-app-layout>
    <x-slot name="header">
        <strong>About Us</strong>
    </x-slot>

    <div class="container py-4">
        @php
            for ($i=0; $i < 10; $i++) {
                print($i);
            }
        @endphp
        
    </div>
</x-app-layout>