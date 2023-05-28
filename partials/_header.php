    <!-- <header class="text-black bg-white shadow-inner z-50 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <span class="ml-[-2.4rem] text-2xl goodFont "> <span class=" text-[#C8A97E]">Ahsan </span>Kitchen</span>
        </a>
        <nav
          class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
          <a href="home.php" class="mr-5 transition-all duration-500 cursor-pointer text-lg">Home</a>
          <a href="about.php" class="mr-5  transition-all duration-500 cursor-pointer text-lg">About</a>
          <a href="menu.php" class="mr-5   transition-all duration-500  cursor-pointer text-lg">Menu</a>
          <a href="contact.php" class="mr-5  transition-all duration-500 cursor-pointer transition-all duration-500 text-lg">Contact</a>
        </nav>
        <div class=" flex text-center">
          <a href="#"
            class="block w-full rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
            Book a Table
          </a>
        </div>
     </header> -->

    <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between md:z-[100] md:fixed md:top-0 md:right-0 md:left-0 md:w-full">
      <div class="flex justify-between items-center">
        <span class="text-2xl cursor-pointer">
        <p class="text-2xl goodFont "> <span class="text-[#C8A97E]">Ahsan </span>Kitchen</p>
        </span>


        <span class="text-3xl md:hidden mx-2 block cursor-pointer">
        <ion-icon name="menu-outline" onclick="menu(this)"></ion-icon>
        </span>
      </div>

      <ul class="md:flex md:items-center z-[100] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-1 md:opacity-100 opacity-0 top-[-300px] transition-all ease-in duration-500">
        <li  class="mx-4 my-6 md:my-0" >
          <a href="home.php" class="text-xl">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="about.php" class="text-xl">About</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="menu.php" class="text-xl">Menu</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="contact.php" class="text-xl">Contact</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="cart.php" class="text-xl">Cart</a>
        </li>
        <div class=" flex text-center justify-center">
              <a href="#" class="block rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-[#C8A97E] hover:border-solid hover:border-[1px] hover:border-[#C8A97E] focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                Book a Table
              </a>
            </div>
      </ul>

    </nav>


    <script>
    function menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close" ,list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>
