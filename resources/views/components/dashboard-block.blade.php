<div class="p-6 bg-white border-b border-gray-200 sm:px-20 dark:border-gray-700 dark:bg-gray-900">

    <div class="mt-8 font-mono text-3xl font-bold tracking-tighter dark:text-gray-50">
        Welcome to {{ config('app.name') }}!
    </div>

    <div class="mt-6 text-gray-500 dark:text-gray-300">
        {{ config('app.name') }} is a video game originally created by Nilllzz. It is heavily inspired by Minecraft, and the Pokémon series. Pokémon 3D focused on the strong points of Pokémon Gold and Silver versions and their remakes, and gives players a taste as to how the once 2D world they knew was in 3D. They could even see through the eyes of their own trainer. We hope you love it.
    </div>

    <div class="inline-block mt-2 md:mt-6">
        <a href="{{ GitHubHelper::getDownloadUrl() }}" class="mt-4 group">
            <div class="inline-flex items-center justify-center w-full px-5 py-3 font-medium leading-none transition duration-150 bg-green-700 border border-transparent rounded-lg shadow-sm sm:w-auto text-green-50 group-hover:text-green-100 hover:bg-green-800 group-hover:shadow-lg hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-opacity-50 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                  </svg>
                <span>Download {{ GitHubHelper::getVersion() }}<sup>&dagger;</sup></span>
            </div>
        </a>
        <div class="mt-1 mb-2 text-xs text-gray-900 dark:text-gray-400">
            <span>Released {{ \Carbon\Carbon::parse(GitHubHelper::getReleaseDate())->diffForHumans() }}</span>
            <span class="px-2">&mdash;</span>
            <span><a href="https://pokemon3d.net/wiki/index.php/Pok%C3%A9mon_3D#Requirements"><sup>&dagger;</sup> Requirements apply</a></span>
        </div>
    </div>
    
</div>

<div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 md:grid-cols-2 dark:bg-gray-800">
    <div class="p-6">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">Documentation</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                {{ config('app.name') }} has wonderful documentation covering every aspect of the game. Whether you're new to the game or have previous experience, we recommend reading all of the documentation from beginning to end.
            </div>

            <a href="https://pokemon3d.net/wiki/">
                <div class="flex items-center mt-3 text-sm font-semibold text-green-700 dark:text-green-500">
                    <div>Explore the wiki</div>

                    <div class="ml-1 text-green-700 dark:text-green-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l dark:border-gray-900">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">Forum</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                Our forum offers a lot of threads of discussions, bugs and other information. Check them out, see for yourself, and massively level up your knowledge skills in the process.
            </div>

            <a href="https://pokemon3d.net/forum/">
                <div class="flex items-center mt-3 text-sm font-semibold text-green-700 dark:text-green-500">
                    <div>Start browsing</div>

                    <div class="ml-1 text-green-700 dark:text-green-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 dark:border-gray-900">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">Custom Skin</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                {{ config('app.name') }} has a built in feature where every player has the opportunity to change their look for multiplayer sessions. You'll be amazed how easily you can change it, store other skin and browse what other have made just at your fingertips.
            </div>
            <a href="{{ route('skin-home') }}">
                <div class="flex items-center mt-3 text-sm font-semibold text-green-700 dark:text-green-500">
                    <div>Get to customization</div>

                    <div class="ml-1 text-green-700 dark:text-green-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l dark:border-gray-900">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <div class="ml-4 text-lg font-semibold leading-7 text-gray-600 dark:text-gray-300">Profile</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-300">
                We've made it easy for you to update your profile and presence in the game. So, you're free to get started what matters most: changing your profile picture?
            </div>
            <a href="{{ route('profile.show') }}">
                <div class="flex items-center mt-3 text-sm font-semibold text-green-700 dark:text-green-500">
                    <div>Update your profile</div>

                    <div class="ml-1 text-green-700 dark:text-green-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
