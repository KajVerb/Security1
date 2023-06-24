<x-app-layout>
<style>
    html {
        overflow: hidden;
        height: 100%;
    }
    body {
        height: 100%;
        overflow: auto;
    }
</style>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>
<section class="bg-white dark:bg-gray-900 overscroll-none">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about the higher or lower game? Let us know.</p>
      <form method="POST" action="{{ route('contact.store') }}" class="space-y-8">
        @csrf
      <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
              <input type="text" id="name" name="name" value="{{$user->name}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Name" required>
          </div>

          @error('name')
            <div class="bg-red-50 border-b border-red-400 text-red-800 text-sm p-4 flex justify-between">
                <div class="flex items-center">
                    <p> {{$message}} </p>
                </div>
            </div>
          @enderror

          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" name="email"  value="{{$user->email}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@email.com" required>
          </div>

          @error('email')
            <div class="bg-red-50 border-b border-red-400 text-red-800 text-sm p-4 flex justify-between">
                <div class="flex items-center">
                    <p> {{$message}} </p>
                </div>
            </div>
          @enderror

          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>

          @error('subject')
            <div class="bg-red-50 border-b border-red-400 text-red-800 text-sm p-4 flex justify-between">
                <div class="flex items-center">
                    <p> {{$message}} </p>
                </div>
            </div>
          @enderror

          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
              <textarea id="message" rows="6" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Explain the problem as clear as possible." required></textarea>
          </div>

          @error('description')
            <div class="bg-red-50 border-b border-red-400 text-red-800 text-sm p-4 flex justify-between">
                <div class="flex items-center">
                    <p> {{$message}} </p>
                </div>
            </div>
          @enderror
          
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-bl-800">Submit</button>
      </form>
  </div>
</section>
</x-app-layout>