@extends('layouts.app')

@section('content')
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl font-semibold mb-16 text-center">Cennik</h1>

            <!-- Pricing Table -->
            <div class="max-w-4xl mx-auto mb-20">
                <div class="border-b-2 border-black mb-8">
                    <div class="grid grid-cols-2 gap-8 pb-4">
                        <div>
                            <h2 class="text-3xl font-semibold">Okres wynajmu</h2>
                        </div>
                        <div>
                            <h2 class="text-3xl font-semibold">Cena za 1 walizkę</h2>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-300 pb-6">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <p class="text-xl font-normal">Do 10 dni</p>
                            </div>
                            <div>
                                <p class="text-xl font-normal">299 PLN netto</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <p class="text-xl font-normal">Każdy następny dzień</p>
                            </div>
                            <div>
                                <p class="text-xl font-normal">+30 PLN netto</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border-b border-gray-300 pb-6">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <p class="text-xl font-normal">Wynajem na dłuższy termin</p>
                            </div>
                            <div>
                                <p class="text-xl font-normal">Cena ustalana indywidualnie</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="max-w-4xl mx-auto space-y-12">
                <!-- Odbiór i zwrot -->
                <div>
                    <h2 class="text-3xl font-semibold mb-6">Odbiór i zwrot:</h2>
                    <ul class="space-y-4 text-xl font-normal leading-relaxed list-disc list-inside">
                        <li>Odbiór osobisty: ul. 28 lipca 1943/3, Kraków</li>
                        <li>Możliwość dostarczenia walizki pod wskazany adres na terenie Krakowa (za dodatkową opłatą w wysokości 50 PLN) lub poza granice Krakowa (50 PLN + stawka 2 PLN/km od granicy Krakowa)</li>
                        <li>Możliwość odebrania walizki ze wskazanego adresu na terenie Krakowa (za dodatkową opłatą w wysokości 50 PLN) lub poza granice Krakowa (50 PLN + stawka 2 PLN/km od granicy Krakowa)</li>
                    </ul>
                </div>

                <!-- Stan i bezpieczeństwo -->
                <div>
                    <h2 class="text-3xl font-semibold mb-6">Stan i bezpieczeństwo:</h2>
                    <ul class="space-y-4 text-xl font-normal leading-relaxed list-disc list-inside">
                        <li>Walizki są regularnie kontrolowane i w pełni przygotowane do transportu</li>
                        <li>Stan walizki potwierdzany jest zdjęciami przed wypożyczeniem</li>
                    </ul>
                </div>

                <!-- Kaucja -->
                <div>
                    <h2 class="text-3xl font-semibold mb-6">Kaucja:</h2>
                    <ul class="space-y-4 text-xl font-normal leading-relaxed list-disc list-inside">
                        <li>Kaucja zwrotna: 800 PLN, pobierana przy odbiorze</li>
                        <li>Zwracana po oddaniu walizki w stanie nienaruszonym</li>
                    </ul>
                </div>

                <!-- Płatność -->
                <div>
                    <h2 class="text-3xl font-semibold mb-6">Płatność:</h2>
                    <ul class="space-y-4 text-xl font-normal leading-relaxed list-disc list-inside">
                        <li>Gotówka, przelew lub płatność BLIK przy odbiorze</li>
                        <li>Możliwość wystawienia faktury VAT</li>
                    </ul>
                </div>

                <!-- Wynajmowany zestaw -->
                <div>
                    <h2 class="text-3xl font-semibold mb-6">Wynajmowany zestaw obejmuje:</h2>
                    <ul class="space-y-4 text-xl font-normal leading-relaxed list-disc list-inside">
                        <li>Stelaż Bike Stand Pro</li>
                        <li>Dwie przegrody na koła z ochraniaczami tarcz hamulcowych</li>
                        <li>Zestaw pasów i paneli ochronnych</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

