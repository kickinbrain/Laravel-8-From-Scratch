
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
