<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Job Board</title>
        @vite('resources/css/app.css','resources/js/app.js')
    </head>

  <body class="from-10% via-30% to-90% mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-100 via-sky-100 to-emerald-100 text-slate-700">
    <div x-data="{ count: 0 }">
        <button @click="count++">Add</button>
        <span x-text="count">0</span>
    </div>
    {{ $slot }}
  </body>
</html>
