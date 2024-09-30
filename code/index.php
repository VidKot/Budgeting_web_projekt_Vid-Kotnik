<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Website</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Container -->
  <div class="w-full h-full relative bg-[#F5F5F5]">
    
    <!-- Background Section for Desktop -->
    <div class="absolute w-full h-[1057px] bg-gradient-to-r from-[#141E30] to-[#243B55] top-0 left-0">
      <!-- Additional layers with gradient and borders -->
      <div class="absolute left-0 top-[-28px] w-[1496px] h-[1085px] bg-gradient-to-r from-[#141E30] to-[#243B55]"></div>
    </div>
    
    <!-- Center Section with Blur Circles (abstract shapes) -->
    <div class="absolute w-[1432px] h-[1644px] top-[-760px] left-[1508px] transform rotate-[43.43deg]">
      <!-- Multiple Blurred Circles with borders -->
      <div class="absolute w-[1429px] h-[836px] top-[361px] left-[-721px] border-[14px] border-[#05FFD2] blur-lg"></div>
      <div class="absolute w-[1429px] h-[836px] top-[301px] left-[-602px] border-[14px] border-[#8000FF] blur-lg"></div>
      <div class="absolute w-[1429px] h-[836px] top-[241px] left-[-482px] border-[14px] border-[#F260FF] blur-lg"></div>
      <div class="absolute w-[1429px] h-[836px] top-[181px] left-[-362px] border-[14px] border-[#FF844F] blur-lg"></div>
      <div class="absolute w-[1429px] h-[836px] top-[120px] left-[-238px] border-[14px] border-white blur-lg"></div>
      <div class="absolute w-[1429px] h-[836px] top-[60px] left-[-118px] border-[14px] border-[#01FFFF] blur-lg"></div>
      <div class="absolute w-[1429px] h-[836px] top-0 left-0 border-[14px] border-[#E462D7] blur-lg"></div>
    </div>

    <!-- Content Section with Text and Buttons -->
    <div class="absolute flex flex-col justify-start items-start gap-16 p-6 bg-white w-[429px] h-[1060px] left-[507px] top-0">
      <!-- Hello Section -->
      <div class="flex justify-center items-center gap-[152px] w-[134px]">
        <div class="text-[#01101B] text-[16px] font-medium font-['Plus_Jakarta_Sans']">Hello</div>
      </div>

      <!-- Buttons (Login and Register) -->
      <div class="flex flex-col gap-4 w-full">
        <button class="flex justify-center items-center w-full py-3 bg-gradient-to-r from-[#141E30] to-[#243B55] text-white text-[14px] font-medium font-['Plus_Jakarta_Sans'] rounded-lg">
          Login
        </button>
        <button class="flex justify-center items-center w-full py-3 bg-gradient-to-r from-[#141E30] to-[#243B55] text-white text-[14px] font-medium font-['Plus_Jakarta_Sans'] rounded-lg">
          Register
        </button>
      </div>

      <!-- Content Box with Inner Text -->
      <div class="relative w-full h-[305px]">
        <div class="absolute w-[381px] h-[305px] bg-gradient-to-r from-[#141E30] to-[#243B55] rounded-lg"></div>
        <div class="absolute w-[395px] h-[313px] top-[-8px] bg-gradient-to-r from-[#141E30] to-[#243B55] rounded-lg"></div>
        
        <!-- Abstract shapes -->
        <div class="absolute w-[278px] h-[282px] left-[174px] top-[45px]"></div>
        <div class="absolute w-[395px] h-[443px] left-[399px] top-[-219px] transform rotate-[45.92deg] border-[14px] border-[#05FFD2] blur-lg"></div>

        <!-- Text Content -->
        <div class="absolute top-[36px] left-[22px] flex flex-col gap-[16px]">
          <div class="text-white text-[24px] font-semibold font-['Plus_Jakarta_Sans'] leading-tight">
            How to manage finance easily
          </div>
          <button class="flex justify-center items-center px-6 py-3 border border-white text-white text-[14px] font-medium font-['Plus_Jakarta_Sans'] rounded-full">
            Watch Tutorial
          </button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
