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
        <div class="flex flex-1 px-4 py-6">
            <a href="#" class="flex-none">
               <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
            <div class="w-full mx-4">
               <h4 class="text-xl font-semibold">
                  <a href="#" class="hover:underline">A random title can go here</a>
               </h4>
               <div class="text-gray-600 mt-3 ">
                     Lorem, ipsum dolor sit amet consectetur adipisicing elit. At sint omnis qui quasi distinctio dolor reprehenderit mollitia numquam aperiam libero odit, molestias, explicabo ut eligendi tempore aliquam in magni exercitationem tenetur nulla quae natus sequi! Adipisci eaque quae minima et illum, repellendus amet beatae autem totam voluptas inventore cupiditate quis.
               </div>

                 <div class="flex items-center justify-between mt-6">
                   <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                      <div class="font-bold text-gray-900">John Doe</div>
                      <div>&bull;</div>
                      <div>10 hours ago</div>
                      <div>&bull;</div>
                      <div>Category</div>
                      <div>&bull;</div>
                      <div class="text-gray-900">3 Commetnts</div>
                   </div>
                   <div class="flex items-center space-x-2">
                         <div class="relative bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
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
    </div><! --end ideas container -->
    <div class="button-container flex items-center justify-between mt-6">
        <div class="flex item-center space-x-4 ml-6">

                <button 
                type="button"
                class="flex items-center justify-center w-32 h-11 text-xs bg-blue-400 text-white
                font-semibold rounded-xl border border-blue-400 hover:bg-blue-hover
                transition duration-150 ease-in px-6 py-3"
                >
                <span class="ml-2">Reply</span>
            </button>
            <button 
            type="button"
            class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
            transition duration-150 ease-in px-6 py-3"
            >
                <span>Set status</span>
                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>

        </button>

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
        
     
            <! --endcomment container -->

             <div class="is-admin comment-container relative hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-4 ">
            <div class="flex flex-1 px-4 py-6">
                <a href="#" class="flex-none">
                   <img src="https://source.unsplash.com/200*200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                   <div class="text-center uppercase text-blue-400 text-xxs font-bold mt-1">Admin</div>
                </a>
                
                <div class="w-full mx-4">
                   <h4 class="text-xl font-semibold">
                      <a href="#" class="hover:underline">Status change to "under construction"</a>
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
