<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class= "w-full rounded-xl px-4 py-2">
                 <option value="category one">category one</option>
                 <option value="category two">category two</option>
                 <option value="category three">category three</option>
                 <option value="category four">category four</option>
                 <option value="category five">category five</option>
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class= "w-full rounded-xl px-4 py-2">
                 <option value="filter one">filter one</option>
                 <option value="filter two">filter two</option>
                 <option value="filter three">filter three</option>
                 <option value="filter four">filter four</option>
                 <option value="filter five">filter five</option>
            </select>
        </div>
          
          <div class="w-full md:w-2/3 relative">
          
              <input type="search" placeholder="Find idea" class="w-full rounded-xl bg-white placeholder-gray-900 px-4 py-2 pl-8" >
               <div class="absolute top-0 flex item-center h-full ml-2">
               <svg class=" w-4 text-gray-700 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
               </div>
          </div>

    </div><! --end filters -->

     <div class="ideas-container space-y-6 my-6">
      
        @foreach ($ideas as $idea )
            
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
                 <div class="text-semibold text-2xl">21</div>
                  <div class="text-gray-500">Votes</div>
              </div>
              <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">vote</button>
           </div>
           <div class="flex px-2 py-6">
            
               <a href="#" >
                  <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
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
                                           class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                           <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Mark as Spam</li>
                                           <li href="#" class="hover:bg-gray-100 block transition duration-150 ease-in py-3 px-5">Delete Post</li>
                                           </ul>
                            </button>
                      </div> 
                      <div class="flex items-center md:hidden mt-4 md:mt-0">
                           <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                              <div class="text-sm font-bold leading-none">12</div>
                              <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                           </div>
                           <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">vote</button>
                      </div>
                    </div>

               </div>
            
           </div> 
       </div><! --end ideas container -->
       @endforeach
     </div><! --end ideass container -->
     <div class="my-8">
        {{ $ideas->links() }}
     </div>
     
</x-app-layout>
