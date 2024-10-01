<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="relative w-full h-full min-h-screen bg-[#F5F5F5]">
        <!-- Desktop Background Shapes -->
        <div class="absolute inset-0 hidden lg:block">
            <div class="absolute w-full h-full bg-gradient-to-r from-[#141E30] to-[#243B55]"></div>
            <div class="absolute w-[1496px] h-[1086px] top-0 left-0 bg-gradient-to-r from-[#141E30] to-[#243B55]"></div>
            <!-- Rotating Gradient Shapes -->
            <div class="absolute w-[1429px] h-[836px] top-[-760px] left-[1508px] rotate-[43.43deg]">
                <div class="absolute top-[361px] left-[-722px] w-[1429px] h-[836px] border-[14px] border-[#05FFD2] blur-xl shadow-lg"></div>
                <div class="absolute top-[301px] left-[-602px] w-[1429px] h-[836px] border-[14px] border-[#8000FF] blur-xl shadow-lg"></div>
                <div class="absolute top-[241px] left-[-482px] w-[1429px] h-[836px] border-[14px] border-[#F260FF] blur-xl shadow-lg"></div>
                <div class="absolute top-[181px] left-[-362px] w-[1429px] h-[836px] border-[14px] border-[#FF844F] blur-xl shadow-lg"></div>
                <div class="absolute top-[121px] left-[-238px] w-[1429px] h-[836px] border-[14px] border-white blur-xl shadow-lg"></div>
                <div class="absolute top-[61px] left-[-119px] w-[1429px] h-[836px] border-[14px] border-[#01FFFF] blur-xl shadow-lg"></div>
                <div class="absolute top-[0px] left-[0px] w-[1429px] h-[836px] border-[14px] border-[#E462D7] blur-xl shadow-lg"></div>
            </div>
        </div>

        <!-- Register Form -->
        <div class="relative lg:absolute lg:top-0 lg:left-[507px] lg:h-screen w-full lg:w-[427px] h-full flex items-start justify-start">
            <div class="w-full p-6 bg-white flex flex-col gap-6">
                <div class="text-[#01101B] text-xl font-medium">Register</div>

                <!-- Input fields -->
                <div class="w-full p-4 border border-gray-400 rounded-md">
                    <input type="text" placeholder="Name" class="w-full text-gray-500 text-sm font-normal outline-none" />
                </div>
                <div class="w-full p-4 border border-gray-400 rounded-md">
                    <input type="text" placeholder="Last Name" class="w-full text-gray-500 text-sm font-normal outline-none" />
                </div>
                <div class="w-full p-4 border border-gray-400 rounded-md">
                    <input type="email" placeholder="Email" class="w-full text-gray-500 text-sm font-normal outline-none" />
                </div>
                <div class="w-full p-4 border border-gray-400 rounded-md">
                    <input type="password" placeholder="Password" class="w-full text-gray-500 text-sm font-normal outline-none" />
                </div>

                <!-- Submit Button -->
                <button class="w-full py-3 bg-gradient-to-r from-[#141E30] to-[#243B55] text-white text-sm font-medium rounded-md">
                    Submit
                </button>

                <!-- Promo Section -->
                <div class="relative w-full h-[305px] bg-gradient-to-r from-[#141E30] to-[#243B55] rounded-lg p-6">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#141E30] to-[#243B55] rounded-lg blur-xl"></div>

                    <div class="relative z-10">
                        <div class="text-white text-2xl font-semibold">How to manage finance easily</div>
                        <button class="mt-4 px-6 py-2 text-white border border-white rounded-full text-sm font-medium">
                            Watch Tutorial
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
