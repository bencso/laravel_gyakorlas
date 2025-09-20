@extends('layout')
{{-- TODO: Majd megcsinálni a queryt összes filterezésre :) Meg persze designt is --}}
@section('content')
    <div
        class="flex align-middle justify-between items-center bg-gradient-to-br from-amber-100 to-amber-100 border border-amber-200 px-5 py-4 text-lg text-amber-950 mb-3 rounded-2xl w-full">
        <div class="flex gap-3 items-center ">
            <p class="font-bold">Lapozás:</p>
            <div class="flex gap-3">
                <a
                    @if ($previous[0]) class="bg-gradient-to-br from-amber-200 to-amber-300 hover:bg-amber-400 text-amber-900 font-bold py-2 px-4 rounded" href={{ $previous[1] }}@else class="bg-gradient-to-br from-amber-200/50 to-amber-300/50 text-amber-900/50 font-bold py-2 px-4 rounded cursor-not-allowed" @endif>Előző
                    oldal</a>
                <a
                    @if ($next[0]) class="bg-gradient-to-br from-amber-200 to-amber-300 hover:bg-amber-400 text-amber-900 font-bold py-2 px-4 rounded" href={{ $next[1] }}@else class="bg-gradient-to-br from-amber-200/50 to-amber-300/50 text-amber-900/60 font-bold py-2 px-4 rounded cursor-not-allowed" @endif>Következő
                    oldal</a>
            </div>
        </div>

        <div class="inline-block relative w-64">
            <form method="GET" action="">
                <input type="hidden" value={{ $page }} name="page" />
                <select name="limit" onchange="this.form.submit()"
                    class="block accent-amber-100 w-full bg-gradient-to-br from-amber-100 to-amber-300 border text-amber-900  border-amber-400 hover:border-amber-500 transition-all duration-150 appearance-none text-center px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Karakterek száma</option>
                    {{-- TODO: Ennek logikáját majd átirni mert ez még igy nem jó :) --}}
                    @for ($i = 10; $i < $pageLimit; $i++)
                        @if ($i % 10 == 0)
                            {
                            <option value={{ $i }} {{ request('limit') == $i ? 'selected' : '' }}>{{ $i }} karakter</option>
                            }
                        @endif
                    @endfor
                </select>
            </form>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 w-full gap-5">
        @foreach ($items as $character)
            <x-card name="{{ $character['name'] }}" description="{{ $character['description'] }}"
                img="{{ $character['image'] }}" />
        @endforeach
    </div>
@endsection
