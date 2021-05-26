<x-app-layout>
    <div>
       <a href="/" class="flex items-center font-semibold hover:underline">
           <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
             </svg>
            <span class="ml-2">All Ideas</span>
        </a>    
    </div>
  <livewire:idea-show 
    :idea="$idea" 
    :votesCount="$votesCount"
    />

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
