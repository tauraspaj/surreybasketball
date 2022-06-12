
<section class="hidden sm:flex h-16 container mx-auto overflow-y-scroll {{$latestScoresVisibility}}">
    {{-- Tournament select --}}
    <div class="flex-none border-r border-gray-300 h-full flex items-center px-2">
        <button class="border rounded-full bg-gray-50 px-4 py-1 flex items-center space-x-2 transition hover:bg-white">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            <p class="font-semibold text-sm uppercase">World Cup Champ</p>
        </button>
    </div>
    <div class="flex-noneflex flex-col justify-center px-4 text-xs uppercase font-bold border-r border-gray-300">
        <p class="mb-2 font-bold text-center underline">Finals</p>
        <div class="flex justify-between items-center space-x-8">
            <p>Senpais</p>
            <p>101</p>
        </div>
        <div class="flex justify-between items-center text-gray-400 space-x-8 font-semibold">
            <p>Scorers</p>
            <p>97</p>
        </div>
    </div>
</section>