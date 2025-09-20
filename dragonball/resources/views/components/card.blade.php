<div
    class="w-full rounded-2xl select-none p-6 flex flex-col gap-4 h-[500px] overflow-hidden shadow-2xl bg-gradient-to-br from-amber-100 to-amber-100 border border-amber-200">
    <div class="flex items-center justify-center mb-2">
        <img draggable="false"
            class="w-[120px] select-none h-[120px] rounded-full shadow-md border-4 border-amber-200 object-cover object-top"
            src="{{ $img }}" alt="{{ $name }}">
    </div>
    <div class="text-amber-950 font-extrabold text-2xl text-center tracking-wide">{{ $name }}</div>
    <p class="text-amber-800 px-4 py-2 text-center text-base flex-1 overflow-auto">
        {{ $description }}
    </p>
    <button
        class="shadow-2xl cursor-pointer hover:from-amber-50 py-2 bg-gradient-to-br from-amber-100 to-amber-300 border border-amber-400 rounded-4xl text-amber-900">
        További infók
    </button>
</div>
