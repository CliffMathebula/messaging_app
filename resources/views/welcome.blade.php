<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind CSS Simple Template </title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body>

  <header class="bg-white" x-data="{ isOpen: false }">
    <nav class="container px-8 py-4 mx-auto md:flex md:justify-between md:items-center">
      <div class="flex items-center justify-between">
        <a class="text-xl font-bold text-gray-900 md:text-2xl" href="#">Logo</a>

        <!-- Mobile menu button -->
        <div @click="isOpen = !isOpen" class="flex md:hidden">
          <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
              </path>
            </svg>
          </button>
        </div>
      </div>

      <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
        <a class="text-gray-800 transform hover:text-yellow-400" href="#">Home</a>
        <a class="text-gray-800 transform hover:text-yellow-400" href="#">About Us</a>
        <a class="text-gray-800 transform hover:text-yellow-400" href="#">Blog</a>
        <a class="text-gray-800 transform hover:text-yellow-400" href="#">Service</a>
        <a class="px-4 py-2 text-center text-white border bg-gradient-to-b from-yellow-300 to-yellow-500 rounded-2xl hover:shadow-xl" href="#" onclick="toggleModal('modal-id')">Contact
          Us</a>
      </div>
    </nav>
  </header>

  <!-- hero section -->
  <section class="bg-gray-200">
    <div class="flex justify-center">
      <div class="px-20 py-20 lg:w-1/2">
        <div class="w-full ">
          <h1 class="mb-2 text-4xl font-medium text-gray-900">Welcome to my Website
          </h1>
          <div class="leading-relaxed">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus
            hic, iure vel commodi voluptatibus, tenetur ipsum.</div>
          <button class="px-8 py-2 mt-4 text-xl text-white hover:shadow-2xl bg-gradient-to-b from-yellow-300 to-yellow-500 rounded-xl">Get
            started</button>
        </div>

      </div>
    </div>
  </section>


  <section class="px-10 py-10 bg-gray-200">
    <div class="p-10 mx-auto bg-white rounded-lg shadow md:w-3/4 lg:w-1/2">
      <h3 class="text-2xl font-bold text-center">Form</h3>
      <form action="">
        <div class="lg:flex">
          <div class="pr-1 mt-2 lg:w-1/2">
            <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you name">
          </div>
          <div class="pr-1 mt-2 lg:ml-2 lg:w-1/2">
            <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you Email">
            <p class="mt-1 ml-4 text-sm text-red-400">Email field is required!</p>
          </div>
        </div>
        <div class="block pr-1 mt-2">
          <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you name">
        </div>
        <div>
          <textarea name="message" cols="10" rows="3" placeholder="message" class="w-full p-3 mt-3 border border-gray-300 shadow rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
        </div>
        <div class="flex justify-center">
          <button type="submit" class="px-8 py-2 text-white bg-yellow-400 rounded-xl">Submit</button>
        </div>

      </form>
    </div>
  </section>

  <div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
          <h3 class="text-3xl font-semibold">
            Modal Title
          </h3>
          <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" ">
                <span class=" bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
            </span>
          </button>
        </div>
        <!--body-->
        <div class="relative p-6 flex-auto">
          <p class="my-4 text-slate-500 text-lg leading-relaxed">
            I always felt like I could do anything. That’s the main
            thing people are controlled by! Thoughts- their perception
            of themselves! They're slowed down by their perception of
            themselves. If you're taught you can’t do anything, you
            won’t do anything. I was taught I could do everything.
          </p>
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
          <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
            Close
          </button>
          <button class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
            Save Changes
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer class="text-white bg-gray-100">
    <div class="container flex items-center px-5 py-8 mx-auto ">
      <p class="text-sm text-black">
        &copy; <span id="year"></span>
        <a href="#" class="ml-1 text-black" target="https://github.com/CliffMathebula/">Cliff Mathebula</a>
      </p>
    </div>
  </footer>

  <script type="text/javascript">

    function toggleModal() {
      document.getElementById('modal-id').classList.toggle("hidden");
    }

    document.getElementById("year").innerHTML = new Date().getFullYear();
  </script>

</body>

</html>