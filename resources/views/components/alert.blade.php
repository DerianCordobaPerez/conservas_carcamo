@if($message = Session::get('success'))
    <div id="alert" class="p-4 mb-4 bg-teal-500 rounded-lg dark:bg-teal-700 rounded-lg absolute z-50 m-4 shadow-xl" role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-blue-700 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <h3 class="text-lg font-medium text-white dark:text-white">
                {{ $message }}
            </h3>
        </div>
    </div>
@endif

@if($message = Session::get('danger'))
    <div id="alert" class="p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200 absolute z-50 m-4 shadow-xl" role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <h3 class="text-lg font-medium text-red-700 dark:text-red-800">
                {{ $message }}
            </h3>
        </div>
    </div>
@endif
