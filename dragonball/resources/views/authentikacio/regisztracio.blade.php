@extends('layout')

@section('content')
<div class="flex min-h-full align-middle items-center h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900 dark:text-white">Regisztrája be a fiókját</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="#" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Email cím</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white/5 outline-white/10 px-3 py-1.5 text-base text-[#FBE32C] outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[rgba(251,227,44,0.50)] sm:text-sm/6" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Jelszó</label>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 outline-white/10 px-3 py-1.5 text-base text-[#FBE32C] outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[rgba(251,227,44,0.50)] sm:text-sm/6" />
        </div>
      </div>

            <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Jelszó ismétlése</label>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 outline-white/10 px-3 py-1.5 text-base text-[#FBE32C] outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[rgba(251,227,44,0.50)] sm:text-sm/6" />
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-[#FBE32C] px-3 py-1.5 text-sm/6 font-semibold text-gray-900 shadow-xs hover:bg-[#c0aa00] transition-colors duration-200 ease-in-out focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[rgba(251,227,44,0.50)]">Regisztráció</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500 dark:text-gray-400">
      Már rendelkezik fiókkal?
      <a href="/bejelentkezes" class="font-semibold text-[#FBE32C] hover:text-[#c0aa00] ">Kattintson ide!</a>
    </p>
  </div>
</div>

@endsection
