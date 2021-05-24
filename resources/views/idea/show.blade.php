<x-app-layout>
    <div>
       <a href="/" class="flex items-center font-semibold hover:underline">
           <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
             </svg>
            <span class="ml-2">All Ideas</span>
        </a>    
    </div>

    <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-4 ">
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none md:mx-4">
            <a href="#" class="flex-none mx-4">
               <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
            <div class="w-full mx-2 md:mx-4">
               <h4 class="text-xl font-semibold">
                  <a href="#" class="hover:underline">{{ $idea->title }}</a>
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
                      <div>Category</div>
                      <div>&bull;</div>
                      <div class="text-gray-900">3 Commetnts</div>
                   </div>
                   <div 
                   x-data="{ isOpen: false }"
                   class="flex items-center space-x-2 mt-4 md:mt-0"
                     
               >
                     <div class="relative bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
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
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                    <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Delete Post</li>
                                    </ul>
                     </button>
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
                <div 
                    x-data="{ isOpen: false }"
                    class="relative">
                   <button 
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center w-36 h-11 text-sm bg-gray-200
                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                    transition duration-150 ease-in px-6 py-3"
                    >
                        <span>Set status</span>
                        <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>

                     </button>
                     <div 
                            x-cloak
                            x-show.transition.origin.top.left="isOpen"
                            @click.away="isOpen = false" 
                            @keydown.escape.window = "isOpen = false"
                        class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                        <form action="#" class="space-y-4 px-4 py-6">
                            <div class="space-y-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" checked="" class="bg-gray-200 text-gray-400
                                        border-none"name="radio-direction" value="1">
                                        <span class="ml-2">Open</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" checked="" class="bg-gray-200 text-purple-400
                                        border-none"name="radio-direction" value="1">
                                        <span class="ml-2">Considering</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" checked="" class="bg-gray-200 text-yellow-400
                                        border-none"name="radio-direction" value="1">
                                        <span class="ml-2">In Progress</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" checked="" class="bg-gray-200 text-green-400
                                        border-none"name="radio-direction" value="1">
                                        <span class="ml-2">Implemeted</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" checked="" class="bg-gray-200 text-red-400
                                        border-none"name="radio-direction" value="1">
                                        <span class="ml-2">Closed</span>
                                    </label>
                                </div>
                            </div>
                               <div>

                                    <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="
                                    w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                                    placeholder="Add an update comment (optional)"></textarea>
                              </div> 
                              <div class="flex item-center justify-between space-x-3">
                                <button 
                                    type="button"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                    transition duration-150 ease-in px-6 py-3"
                                    >
                                    <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                      </svg>
    
                                    <span class="ml-2">Attach</span>
                                </button>
                                <button 
                                    type="submit"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 text-white
                                    font-semibold rounded-xl border border-blue-400 hover:bg-blue-hover
                                    transition duration-150 ease-in px-6 py-3"
                                    >
                                    <span class="ml-2">Update</span>
                                </button>
    
                            </div>
                            <div>
                                <label class="font-normal inline-flex items-center">
                                    <input type="checkbox" name="notify_voters" class="rounded bg-gray-200"checked="">
                                    <span class="ml-2">Notify all voters</span>
                                </label>
                            </div>
                        </form>

                     </div>
                 </div>

        </div>
        <div class="flex item-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            <button 
            type="button"
            class="w-32 h-11 text-xs bg-gray-200
            font-semibold rounded-xl border uppercase border-gray-200 hover:border-gray-400
            transition duration-150 ease-in px-6 py-3"
            >
                <span>Vote</span>
            
        </button>

        </div>
            
    </div><! --end button container -->

    <div class="comments-container relative space-y-6 ml-22 pt-6 my-8 mt-1">
      <div class="comment-container relative hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-4 ">
        <div class="flex flex-1 px-4 py-6">
            <a href="#" class="flex-none">
               <img src="https://source.unsplash.com/200*200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="w-full mx-4">
           
               <div class="text-gray-600 mt-3 line-clamp-3">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit.
               </div>

                 <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="font-bold text-gray-900">John Doe</div>
                      <div>&bull;</div>
                      <div>10 hours ago</div>
                    </div>
                   <div 
                    x-data="{ isOpen: false }"
                    class="flex items-center space-x-2">
                         <button 
                         @click="isOpen = !isOpen"
                         class=" relative bg-gray-100 hover:bg-gray-400 rounded-full h-7 transition border duration-150 ease-in py-2 px-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                        <ul 
                                           x-cloak
                                           x-show.transition.origin.top.left="isOpen"
                                           @click.away="isOpen = false" 
                                           @keydown.escape.window = "isOpen = false"
                                           class="absolute z-10 w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                        <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Delete Post</li>
                                        </ul>
                         </button>
                   </div> 
                 </div>

            </div>
              </div> 
           </div>
        
     
            <! --endcomment container -->

             <div class="is-admin comment-container relative hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-4 ">
            <div class="flex flex-1 px-4 py-6">
                <a href="#" class="flex-none">
                   <img src="https://source.unsplash.com/200*200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                   <div class="text-center uppercase text-blue-400 text-xxs font-bold mt-1">Admin</div>
                </a>
                
                <div class="w-full mx-4">
                   <h4 class="text-xl font-semibold">
                      <a href="#" class="hover:underline">Status change to "under consideration"</a>
                   </h4>
                   <div class="text-gray-600 mt-3 line-clamp-3">
                         Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                   </div>
    
                     <div class="flex items-center justify-between mt-6">
                       <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                          <div class="font-bold text-blue-400">Andrea</div>
                          <div>&bull;</div>
                          <div>10 hours ago</div>
                        </div>
                       <div class="flex items-center space-x-2">
                             <button class="bg-gray-100 hover:bg-gray-400 rounded-full h-7 transition border duration-150 ease-in py-2 px-4">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                            </svg>
                                            <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                            <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                            <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Delete Post</li>
                                            </ul>
                             </button>
                       </div> 
                     </div>
    
                </div>
            </div> 
        </div>
        <! --end Admin comment container -->

         <div class="comment-container relative hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-4 ">
        <div class="flex flex-1 px-4 py-6">
            <a href="#" class="flex-none">
               <img src="https://source.unsplash.com/200*200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="w-full mx-4">
           
               <div class="text-gray-600 mt-3 line-clamp-3">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit.
               </div>

                 <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="font-bold text-gray-900">John Doe</div>
                      <div>&bull;</div>
                      <div>10 hours ago</div>
                    </div>
                   <div class="flex items-center space-x-2">
                         <button class="bg-gray-100 hover:bg-gray-400 rounded-full h-7 transition border duration-150 ease-in py-2 px-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                        <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                        <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                        <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Delete Post</li>
                                        </ul>
                         </button>
                   </div> 
                 </div>

            </div>
          </div> 
         <! --endcomment container -->
         
        
        
    </div><! --end comments container -->
  

</x-app-layout>
