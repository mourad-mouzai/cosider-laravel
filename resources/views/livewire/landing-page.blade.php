<div 
class="flex flex-col bg-indigo-900 w-full h-screen"
x-data="{ subscriber:false }"
>
    <div class=" flex fixed top-0 w-full dark:bg-indigo-950 dark:bg-opacity-60 h-32">
        <nav class=" flex justify-between container mx-auto text-indigo-200">
            <a href="/" class="text-4xl font-bold my-auto py-auto">
                <x-application-logo class="w-16 h-16 fill-current">                    
                </x-application-logo>
            </a>
            <div class="flex justify-end my-auto py-auto">
                @auth
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}">
                    Login
                </a>
                @endauth
            </div> 
        </nav>
    </div>
    
    <div class="flex container mx-auto items-center h-full">
        <div class="flex flex-col sm:w-full md:w-1/2 lg:w-1/3 items-start mx-12">
            <h1 class="text-white font-bold text-5xl leading-tight mb-4">
                Bienvenu à COSIDER TP
            </h1>
            <p class="text-indigo-200 text-xl mb-10">
                C'est un site de comunication du personel de la branche 
                <b>COSIDER TP</b>, veuillez vous inscrir dabore!
            </p>
            <x-primary-button 
            class="py-3 px-8 bg-red-500 dark:bg-red-500
                hover:bg-red-600 dark:hover:bg-red-600 text-white dark:text-white"
                x-on:click="subscriber = ! subscriber"
                >
                Subscribe 
            </x-primary-button>
        </div>
    </div>


    <div 
    class="flex fixed top-0 dark:bg-gray-900 dark:bg-opacity-60 items-center h-full w-full"
    x-show="subscriber"
    x-on:click.self=" subscriber = false "
    x-on:keydown.escape.window=" subscriber = false "
    >
        <div class="m-auto bg-pink-500 shadow-2xl rounded-xl p-8">
            <p class="text-white text-5xl font-extrabold text-center">
                Faite votre inscription
            </p>
            <form class="flex flex-col items-center p-24"
            wire:submit.prevent="subscribeFunction">
                <x-text-input class="px-5 py-3 w-80 border border-blue-400 dark:border-blue-400
                dark:bg-white bg-white" 
                type="email" 
                name="email" 
                placeholder="Votre email"
                wire:model="subscriptionEmail"/>                
                <span class=" text-gray-100 text-xs">
                    Un message de confiramation vous sera envoyé
                </span>
                <x-primary-button class="px-5 py-3 mt-5 w-80 dark:bg-blue-500 dark:hover:bg-blue-400 justify-center">
                    Envoyer
                </x-primary-button>
            </form>
        </div>
    </div>  
</div>
