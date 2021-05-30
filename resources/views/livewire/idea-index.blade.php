<div 
        x-data
        @click="
        const clicked = $event.target
        const target = clicked.tagName.toLowerCase()
        
        const ignores = ['button','svg','path','a']

        if(! ignores.includes(target)){
        clicked.closest('.idea-container').querySelector('.idea-link').click()
        }

        " 
    class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer "

    >
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="text-semibold text-2xl @if ($hasVoted) text-blue-400 @endif" >{{ $votesCount }}</div>
            <div class="text-gray-500  py-2">Votes</div>
        </div>
        @if ($hasVoted)
                <button class="w-20 bg-blue-400 text-white border border-blue hover:bg-blue-400-hover 
                font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voted</button>
            @else
                <button class="w-20 bg-gray-400 border border-gray-400 hover:border-gray-400 font-bold
                 text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
            @endif
    </div>
    <div class="flex px-2 py-6">

        <a href="#" >
            <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
        <div class="w-full flex flex-col justify-between mx-2 md:mx-4">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="{{ route('idea.show',$idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-3">
                {{ $idea->description }} 
            </div>

            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                    <div>{{ $idea->created_at->diffForHumans()}}</div>
                    <div>&bull;</div>
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 Commetnts</div>
                </div>
                <div 
                    x-data="{ isOpen: false }"
                    class="flex items-center space-x-2 mt-4 md:mt-0"
                    
                >
                <div class="{{ $idea->status->classes }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name }}</div>
                    <button 
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-400 rounded-full h-7 transition border duration-150 ease-in py-2 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                    <ul
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false" 
                                    @keydown.escape.window = "isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                    <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Delete Post</li>
                                    </ul>
                    </button>
                </div> 
                <div class="flex items-center md:hidden mt-4 md:mt-0">
                    <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                        <div class="text-sm font-bold leading-none  @if ($hasVoted) text-blue-400 @endif">{{ $votesCount }}</div>
                        <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                    </div>
                    @if ($hasVoted)
                <button class="w-20 bg-blue text-white border border-blue-400 hover:bg-blue-400-hover font-bold 
                text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Voted</button>
                  @else
                <button class="w-20 bg-gray-400 border border-gray-400 hover:border-gray-500 font-bold 
                text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">Vote</button>
            @endif
                </div>
            </div>

        </div>

    </div> 
</div><! --end ideas container -->