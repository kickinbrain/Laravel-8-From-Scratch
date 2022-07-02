
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html and CSS workshop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="" width="165" height="16">
            </a>
        </div>
        <div class="mt-8 md:mt-0">
            <a href="/" class="text-xs font-bold uppercase">Home Page</a>
            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Subscribe
                for updates</a>
        </div>
    </nav>

    <header class="max-w-4xl mx-auto mt-20 text-center">
        <div class="max-w-xl mx-auto">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>
            <h2 class="inline-flex mt-3">
                By Lary Laracore
                <img src="/images/lary-head.svg" alt="Head of Lary the mascot">
            </h2>
            <p class="text-sm mt-14">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, quo?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repellendus.
            </p>

            <div class="tw-flex tw-justify-center  mt-6 space-y-4 lg:space-y-0 lg:space-x-4">
                    <span class="bg-gray-100 relative flex lg:inline-flex rounded-xl mr-2 mt-2 items-center">
                       <select class="flex-1 appearance-none bg-transparent py-3 pl-2 pr-8 text-sm font-semibold">
                           <option value="category" disabled selected>Category</option>
                           <option value="personal">Personal</option>
                           <option value="business">Business</option>
                       </select>
                       <svg class="transform -rotate-90 absolute right-2" width="19" height="19"
                            viewBox="0.83 1 20.15 20.15"><g fill="none" fill-rule="evenodd"><path
                                   stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path><path
                                   fill="#000"
                                   d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                   </span>
                <span class="bg-gray-100 relative flex lg:inline-flex rounded-xl mr-2 mt-2 items-center">
                       <select class="flex-1 appearance-none bg-transparent py-3 pl-2 pr-8 text-sm font-semibold">
                           <option value="category" disabled selected>Other Filters</option>
                           <option value="personal">Personal</option>
                           <option value="business">Business</option>
                       </select>
                       <svg class="transform -rotate-90 absolute right-2" width="19" height="19"
                            viewBox="0.83 1 20.15 20.15"><g fill="none" fill-rule="evenodd"><path
                                   stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path><path
                                   fill="#000"
                                   d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path></g></svg>
                   </span>
                <span class="bg-gray-100 relative flex lg:inline-flex rounded-xl mr-2 mt-2 items-center px-3 pr-7 py-2">
                       <form action="#" method="GET">
                           <input type="text" name="search" placeholder="Find something"  class="bg-transparent placeholder-black">
                           <svg width="16" viewBox="0 0 15 15" class="absolute right-2 top-3 text-black"><g fill="none" fill-rule="evenodd"><path
                                       d="M-2-2h20v20H-2z"></path>
                               <path fill="#000" d="M10.443 9.232h-.638l-.226-.218A5.223 5.223 0 0 0 10.846 5.6 5.247 5.247 0 1 0 5.6 10.846c1.3 0 2.494-.476 3.414-1.267l.218.226v.638l4.036 4.028 1.203-1.203-4.028-4.036zm-4.843 0A3.627 3.627 0 0 1 1.967 5.6 3.627 3.627 0 0 1 5.6 1.967 3.627 3.627 0 0 1 9.232 5.6 3.627 3.627 0 0 1 5.6 9.232z"></path></g></svg>
                       </form>
                   </span>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="transition-colors duration-300 bg-gray-100 border border-black border-opacity-5 rounded-xl text-center p-10 py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.png" alt="Larry news" class="mx-auto" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative relative inline-block mx-auto rounded-full lg:bg-gray-200 text-xs">
                <form action="#" method="POST" class="lg:flex items-center">
                    <div class="lg:py-3 lg:px-5 inline-flex items-center">
                        <label for="email" class="hidden lg:inline-flex">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>
                        <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent pl-4 rounded-md md:rounded-none focus-within:outline-none">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-6">Subscribe</button>
                </form>
            </div>
        </div>
    </footer>
</section>
</body>
</html>
