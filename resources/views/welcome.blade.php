<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Стили / Скрипты -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @endif
</head>

<body class="bg-gray-900 text-gray-200 font-sans antialiased">
    <div class="container mx-auto max-w-6xl p-6">
        <div class="fixed top-4 right-4 bg-gray-800 text-white p-4 rounded-lg shadow-lg">
            <div class="font-bold text-lg mb-2">Сайт находится в разработке!</div>
            <div>
                <div class="text-sm mb-1">Спасибо за поддержку на
                    <a href="https://boosty.to/dimasliva/donate" target="_blank"
                        class="text-blue-400 hover:underline font-bold">Boosty</a>:
                </div>
                <div class="flex items-center">
                    <span class="font-semibold">Dimentij Lomakin</span>
                    <span class="ml-2">- 540₽</span>
                </div>
            </div>
        </div>


        <div class="bg-gray-700 p-4 mb-4">
            <a href="https://wiki.libsdl.org/" class="text-3xl font-bold">SDL Wiki</a>
        </div>

        <h1 id="simple-directmedia-layer-30" class="text-4xl font-bold mb-4">Simple DirectMedia Layer 3.0</h1>
        <p class="mb-4">Это вики SDL3. SDL2 находится <a href="https://wiki.libsdl.org/SDL2"
                class="text-blue-400 underline">здесь</a>!</p>

        <h2 class="text-2xl font-semibold mb-2" id="try-it-right-now">Попробуйте прямо сейчас!</h2>
        <p class="mb-4">SDL3 <a href="https://github.com/libsdl-org/SDL/releases"
                class="text-blue-400 underline">официально выпущен</a> и готов к использованию.</p>
        <p class="mb-4">Нужна мотивация? Вот список <a href="https://wiki.libsdl.org/SDL3/NewFeatures"
                class="text-blue-400 underline">новых функций</a>, которые вы можете использовать в SDL3!</p>

        <h2 class="text-2xl font-semibold mb-2" id="what-is-it">Что это такое?</h2>
        <p class="mb-4">Simple DirectMedia Layer — это кроссплатформенная библиотека разработки, предназначенная для
            предоставления низкоуровневого доступа к аудио, клавиатуре, мыши, джойстику и графическому оборудованию
            через OpenGL/Direct3D/Metal/Vulkan. Она используется в программном обеспечении для воспроизведения видео,
            эмуляторах и популярных играх, включая награждённый каталог <a href="https://valvesoftware.com/"
                class="text-blue-400 underline">Valve</a> и многие игры из <a href="https://www.humblebundle.com/"
                class="text-blue-400 underline">Humble Bundle</a>.</p>
        <p class="mb-4">SDL официально поддерживает Windows, macOS, Linux, iOS и Android, а также несколько других
            платформ.</p>
        <p class="mb-4">SDL написан на C, работает нативно с C++ и имеет привязки для нескольких других языков, включая
            C#, Python и <a href="https://crates.io/crates/sdl3" class="text-blue-400 underline">Rust</a>.</p>
        <p class="mb-4">SDL 3.0 (часто сокращаемый до "SDL3") распространяется по лицензии <a
                href="https://www.libsdl.org/license.php" class="text-blue-400 underline">zlib</a>. Эта лицензия
            позволяет вам свободно использовать SDL в любом программном обеспечении.</p>
        <p class="mb-4">Это вики SDL. Основной сайт SDL — <a href="https://libsdl.org/"
                class="text-blue-400 underline">libsdl.org</a>.</p>

        <h2 class="text-2xl font-semibold mb-2" id="getting-and-installing-sdl">Получение и установка SDL</h2>
        <ul class="list-disc ml-6 mb-4">
            <li><a href="https://wiki.libsdl.org/SDL3/SourceCode" class="text-blue-400 underline">Исходный код</a>: Как
                скачать исходный код SDL.</li>
            <li><a href="https://github.com/libsdl-org/SDL/blob/main/INSTALL.md"
                    class="text-blue-400 underline">Установка</a>: Как установить SDL на вашей платформе и связать вашу
                программу с ним.</li>
        </ul>

        <h2 class="text-2xl font-semibold mb-2" id="api-documentation">Документация API</h2>
        <ul class="list-disc ml-6 mb-4">
            <li><a href="https://wiki.libsdl.org/SDL3/APIByCategory" class="text-blue-400 underline">API по
                    категориям</a></li>
            <li><a href="https://wiki.libsdl.org/SDL3/QuickReference" class="text-blue-400 underline">Быстрая справка по
                    API</a></li>
            <li><a href="https://wiki.libsdl.org/SDL3/CategoryAPI" class="text-blue-400 underline">Полный индекс API</a>
            </li>
        </ul>

        <h2 class="text-2xl font-semibold mb-2" id="other-sources-of-information">Другие источники информации</h2>
        <ul class="list-disc ml-6 mb-4">
            <li><a href="https://wiki.libsdl.org/SDL3/Tutorials" class="text-blue-400 underline">Учебные пособия</a>
            </li>
            <li><a href="https://wiki.libsdl.org/SDL3/Articles" class="text-blue-400 underline">Статьи</a></li>
            <li><a href="https://github.com/libsdl-org/SDL/blob/main/docs/README-migration.md"
                    class="text-blue-400 underline">Руководство по миграции с SDL 2.0</a></li>
            <li><a href="https://wiki.libsdl.org/SDL3/FAQs" class="text-blue-400 underline">Часто задаваемые вопросы</a>
            </li>
            <li><a href="https://github.com/libsdl-org/SDL/blob/main/docs" class="text-blue-400 underline">READMEs</a>
                по более сложным темам</li>
            <li><a href="https://wiki.libsdl.org/SDL3/Libraries" class="text-blue-400 underline">Библиотеки</a> для
                расширения функциональности SDL</li>
            <li><a href="https://discourse.libsdl.org/" class="text-blue-400 underline">Форумы/почтовые списки</a> и,
                конечно, <a href="https://discord.gg/BwpFGBWsv8" class="text-blue-400 underline">сервер Discord</a>. Оба
                являются отличными местами для того, чтобы быть в курсе последних новостей, помогать другим
                пользователям и задавать вопросы.</li>
        </ul>

        <h2 class="text-2xl font-semibold mb-2" id="other-stuff">Другие вещи</h2>
        <p class="mb-4">Мы надеемся, что вы найдёте всё, что ищете, и насладитесь использованием SDL!</p>
        <p class="mb-4">Если что-то не было освещено здесь, не стесняйтесь <a
                href="https://github.com/libsdl-org/SDL/issues" class="text-blue-400 underline">открыть проблему</a> или
            <a href="https://github.com/libsdl-org/SDL/pulls" class="text-blue-400 underline">подать запрос на
                изменение</a>.
        </p>
        <p class="font-bold">Наслаждайтесь!</p>

        <div class="viewtoolbar my-6">
            <hr class="border-gray-700">
            <div class="flex justify-between text-sm">
                <a href="https://wiki.libsdl.org/SDL3/FrontPage/edit" class="text-blue-400 underline">редактировать</a>
                <a href="https://wiki.libsdl.org/SDL3/FrontPage/delete" class="text-blue-400 underline">удалить</a>
                <a href="https://wiki.libsdl.org/SDL3/FrontPage/history" class="text-blue-400 underline">история</a>
                <a href="https://github.com/libsdl-org/sdlwiki/issues/new?title=Feedback%20on%20page%20SDL3/FrontPage"
                    class="text-blue-400 underline">обратная связь</a>
                <a href="https://wiki.libsdl.org/SDL3/FrontPage/raw" class="text-blue-400 underline">сырой</a>
            </div>
        </div>

        <div class="wikibottombanner">
            <div class="text-center my-4">
                <p class="text-sm">
                    <a href="https://wiki.libsdl.org/" class="text-blue-400 underline">главная страница</a> |
                    <a href="https://wiki.libsdl.org/wiki/index" class="text-blue-400 underline">индекс</a> |
                    <a href="https://wiki.libsdl.org/wiki/search" class="text-blue-400 underline">поиск</a> |
                    <a href="https://github.com/libsdl-org/sdlwiki/commits/main"
                        class="text-blue-400 underline">последние изменения</a> |
                    <a href="https://github.com/libsdl-org/sdlwiki" class="text-blue-400 underline">git репозиторий</a>
                    |
                    <a href="https://wiki.libsdl.org/static_files/offline/sdlwiki.zip"
                        class="text-blue-400 underline">офлайн HTML</a>
                </p>
                <p class="text-sm">Всё содержимое вики лицензировано по <a
                        href="https://creativecommons.org/licenses/by/4.0/" class="text-blue-400 underline">лицензии
                        Creative Commons Attribution 4.0 International (CC BY 4.0)</a>.<br>
                    Вики работает на <a href="https://github.com/libsdl-org/ghwikipp"
                        class="text-blue-400 underline">ghwikipp</a>.</p>
            </div>
        </div>
    </div>
</body>

</html>