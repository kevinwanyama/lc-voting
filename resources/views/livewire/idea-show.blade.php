<div class="idea-and-buttons container">
    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-4 ">
       <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
           <div class="flex-none mx-2">
           <a href="#" class="flex-none mx-4">
              <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
           </a>
       </div>
           <div class="w-full mx-2 md:mx-4">
              <h4 class="text-xl font-semibold mt-2 md:mt-0">
                 {{ $idea->title }}
              </h4>
              <div class="text-gray-600 mt-3 ">
               {{ $idea->description }} 
         </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                  <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                     <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name }}</div>
                     <div class="hidden md:block">&bull;</div>
                     <div>{{ $idea->created_at->diffForHumans() }}</div>
                     <div>&bull;</div>
                     <div>{{ $idea->category->name }}</div>
                     <div>&bull;</div>
                     <div class="text-gray-900">3 Commetnts</div>
                  </div>
                  <div 
                  x-data="{ isOpen: false }"
                  class="flex items-center space-x-2 mt-4 md:mt-0"
                    
              >
                    <div class="{{ $idea->status->classes }} text-xxs font-bold uppercase leading-none 
                    rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name }}</div>
                    <div class="relative">
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                            @click="isOpen = !isOpen"
                        >
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                        </button>
                                   <ul
                                   x-cloak
                                   x-show.transition.origin.top.left="isOpen"
                                   @click.away="isOpen = false" 
                                   @keydown.escape.window = "isOpen = false"
                                   class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                   <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Edit Idea</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Delete Idea</a></li>
                                   <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                  
                                   </ul>
                                </div>
              </div> 
                </div>

           </div>
       </div> 
   </div><! --end ideas container -->
   <div class="button-container flex items-center justify-between mt-6">
       <div class="flex item-center space-x-4 ml-6">
         <div 
               x-data="{ isOpen: false }"
               class="relative">
           <button 
               @click="isOpen = !isOpen"
               type="button"
               class="flex items-center justify-center w-32 h-11 text-sm bg-blue-400 text-white
               font-semibold rounded-xl border border-blue-400 hover:bg-blue-hover
               transition duration-150 ease-in px-6 py-3"
               >
               Reply
           </button>
           <div 
               x-cloak
               x-show.transition.origin.top.left="isOpen"
               @click.away="isOpen = false" 
               @keydown.escape.window = "isOpen = false"
               class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
               <form action="#" class="space-y-4 px-4 py-6">
                   <div>
                       <textarea name="post_comment" id="post_comment" cols="30" rows="4" 
                       class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                       placeholder="Go ahead don't be shy.Share your thoughts..."></textarea>
                   </div>
                   <div class="flex items-center space-x-3">
                       <button 
                           type="button"
                           class="flex items-center justify-center w-1/2 h-11 text-sm bg-blue-400 text-white
                           font-semibold rounded-xl border border-blue-400 hover:bg-blue-hover
                           transition duration-150 ease-in px-6 py-3"
                           >
                           Post Comment
                       </button>

                       <button 
                               type="button"
                               class="flex items-center justify-center w-32 h-11 text-sm bg-gray-200
                               font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                               transition duration-150 ease-in px-6 py-3"
                               >
                               <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                 </svg>

                               <span class="ml-2">Attach</span>
                           </button>

                   </div>
               </form>
           </div>
         </div>
            @auth
              @if (auth()->user()->isAdmin())
                <livewire:set-status :idea="$idea" />
               @endif
           @endauth
       </div>
       <div class="flex item-center space-x-3">
           <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
               <div class="text-xl leading-snug @if ($hasVoted) text-blue-400 @endif">{{ $votesCount }}</div>
               <div class="text-gray-400 text-xs leading-none">Votes</div>
           </div>

           @if ($hasVoted)
           <button
               wire:click.prevent="vote" 
               class="w-20 bg-blue-400 text-white border border-blue-400 font-bold text-xxs uppercase rounded-xl
                hover:bg-blue-500-hover transition duration-150 ease-in px-4 py-3 -mx-5"
           >
               Voted
           </button>
       @else
           <button
               wire:click.prevent="vote" 
               class="w-20 bg-gray-400 border border-gray-400 font-bold text-xxs uppercase rounded-xl 
               hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5"
           >
               Vote
           </button>
       @endif

       </div>
           
   </div><! --end button container -->
</div><! --end ideas and button container -->