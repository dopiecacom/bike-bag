@extends('layouts.app')

@section('content')
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h1 class="text-5xl font-normal mb-6">Skontaktuj się z nami</h1>
                    <p class="text-xl font-normal leading-relaxed">
                        Masz pytania odnośnie produktu, a może chcesz już zamówić walizkę?<br>
                        Po prostu skorzystaj z naszego formularza.
                    </p>
                </div>
                <div>
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-xl font-normal mb-2">Twoje imię:</label>
                            <input type="text" id="name" name="name" required 
                                class="w-full bg-gray-200 rounded-full px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black">
                        </div>
                        <div>
                            <label for="email" class="block text-xl font-normal mb-2">Twój e-mail:</label>
                            <input type="email" id="email" name="email" required 
                                class="w-full bg-gray-200 rounded-full px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black">
                        </div>
                        <div>
                            <label for="message" class="block text-xl font-normal mb-2">Twoja wiadomość:</label>
                            <textarea id="message" name="message" rows="6" required 
                                class="w-full bg-gray-200 rounded-3xl px-6 py-4 text-xl focus:outline-none focus:ring-2 focus:ring-black resize-none"></textarea>
                        </div>
                        <button type="submit" 
                            class="inline-block border-2 border-black px-10 py-4 rounded-full text-xl font-medium uppercase hover:bg-black hover:text-white transition-all">
                            wyślij wiadomość
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Section -->
    <section class="py-0">
        <div class="w-full h-96 overflow-hidden">
            <img src="{{ Vite::asset('resources/images/shared/contact-image.webp') }}" alt="Kontakt" class="w-full h-full object-cover">
        </div>
    </section>
@endsection

