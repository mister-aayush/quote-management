
    <h1 class="font-bold text-4xl">Add Quote</h1>
    <form class="" method="POST" action="add-quote-handle.php" enctype="multipart/form-data">
    <div class="mb-5">
        <label for="new_quote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Quote</label>
        <input type="text" id="new_quote" name="new_quote" class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg
         focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white-700 dark:border-gray-600
          dark:placeholder-gray-400 dark:black-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
    </div>
    <div class="mb-5">
        <label for="Auther_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Author Name</label>
        <input type="text" id="password" name="auther_name"class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg
         focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white-700 dark:border-gray-600
          dark:placeholder-gray-400 dark:black-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>

    <div class="mb-5">
        <label for="author_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Author Image</label>
        <input type="file" accept="image/*" id="author_image" name="author_image"class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg
         focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white-700 dark:border-gray-600
          dark:placeholder-gray-400 dark:black-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
    </div>
    
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
    font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700
     dark:focus:ring-blue-800">Submit</button>
    </form>

    

