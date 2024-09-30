<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Import Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="relative w-full h-screen flex items-center justify-center bg-gradient-to-r from-[#141E30] to-[#243B55]">
        <!-- Background shapes -->
        <div class="absolute w-[1500px] h-[1600px] -top-[700px] left-[1300px] rotate-[43.43deg] blur-xl">
            <div class="absolute w-[800px] h-[450px] border-[14px] border-cyan-300 shadow-xl top-[200px] left-[100px]"></div>
            <div class="absolute w-[800px] h-[450px] border-[14px] border-purple-500 shadow-xl top-[400px] left-[400px]"></div>
            <div class="absolute w-[800px] h-[450px] border-[14px] border-pink-400 shadow-xl top-[600px] left-[700px]"></div>
        </div>

        <!-- Login box -->
        <div class="relative bg-white p-6 rounded-lg shadow-lg w-[427px] flex flex-col gap-6">
            <div class="text-center text-xl font-medium text-[#01101B]">Login</div>

            <input type="email" placeholder="Email" class="w-full p-3 border border-gray-400 rounded-lg text-gray-600">
            <input type="password" placeholder="Password" class="w-full p-3 border border-gray-400 rounded-lg text-gray-600">

            <button class="w-full p-3 text-white font-medium rounded-lg bg-gradient-to-r from-[#141E30] to-[#243B55] hover:bg-gradient-to-l">Submit</button>

            <!-- Promo section -->
            <div class="relative bg-gradient-to-r from-[#141E30] to-[#243B55] rounded-lg p-6 text-white">
                <div class="text-lg font-semibold">How to manage finance easily</div>
                <button class="mt-4 px-6 py-2 border border-white rounded-full hover:bg-white hover:text-[#141E30]">Watch Tutorial</button>
            </div>
        </div>
    </div>
</body>

</html>
