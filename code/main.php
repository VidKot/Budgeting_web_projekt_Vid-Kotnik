<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Container for the layout -->
  <div class="min-h-screen flex flex-col md:flex-row">

    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 bg-white p-4">
      <!-- My Card Section -->
      <div class="border-b pb-4">
        <div class="bg-gradient-to-r from-purple-600 to-blue-500 text-white p-4 rounded-lg">
          <h2 class="text-2xl font-bold">$129</h2>
          <p>**** **** **** 1843</p>
          <p>Exp: 02/22</p>
        </div>
        <div class="mt-4 text-center">
          <button class="bg-gray-200 p-2 rounded-full">+</button>
          <p>Add Card</p>
        </div>
      </div>

      <!-- Quick Transfer Section -->
      <div class="mt-6">
        <h3 class="text-lg font-semibold mb-4">Quick Transfer</h3>
        <div class="flex space-x-2">
          <div class="w-12 h-12 bg-gray-200 rounded-full"></div>
          <div class="w-12 h-12 bg-gray-200 rounded-full"></div>
          <div class="w-12 h-12 bg-gray-200 rounded-full"></div>
        </div>
        <div class="mt-4">
          <input type="text" placeholder="Amount" class="w-full border p-2 rounded-lg" />
          <button class="bg-blue-500 text-white w-full mt-2 p-2 rounded-lg">Send</button>
        </div>
      </div>

      <!-- Transactions -->
      <div class="mt-6">
        <h3 class="text-lg font-semibold mb-4">Transactions</h3>
        <ul>
          <li class="flex justify-between mb-2">
            <span>Grap Music</span>
            <span>-$3.12</span>
          </li>
          <li class="flex justify-between mb-2">
            <span>Musickyu</span>
            <span>-$8.42</span>
          </li>
          <!-- Additional Transactions -->
        </ul>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="w-full md:w-2/4 p-4 md:p-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Income, Expenses, Savings -->
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="text-gray-500">Income</h3>
          <p class="text-xl font-semibold">$273,112.00</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="text-gray-500">Expenses</h3>
          <p class="text-xl font-semibold">$122,110.01</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="text-gray-500">Savings</h3>
          <p class="text-xl font-semibold">$86,723.00</p>
        </div>
      </div>

      <!-- Analysis Report (Line Chart) -->
      <div class="bg-white p-6 mt-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-4">Analysis Report</h3>
        <div class="h-48 bg-gray-200 rounded-lg"></div>
      </div>

      <!-- Goals -->
      <div class="bg-white p-6 mt-6 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-4">My Goals</h3>
        <div class="flex items-center justify-between">
          <span>Buy a House</span>
          <span>$150.00 / $500.00</span>
        </div>
        <div class="bg-gray-200 w-full rounded-full h-2 mt-2">
          <div class="bg-green-500 h-2 w-1/3 rounded-full"></div>
        </div>
        <!-- More Goals -->
      </div>
    </main>

    <!-- Right Sidebar (Calendar & Summary) -->
    <aside class="w-full md:w-1/4 bg-white p-4">
      <!-- Calendar -->
      <div class="border-b pb-4">
        <h3 class="text-lg font-semibold mb-4">Calendar</h3>
        <div class="flex justify-between">
          <!-- Calendar days -->
          <span class="text-gray-500">Mon</span>
          <span class="text-gray-500">Tue</span>
          <span class="text-gray-500">Wed</span>
          <span class="text-gray-500">Thu</span>
          <span class="text-gray-500">Fri</span>
          <span class="text-gray-500">Sat</span>
          <span class="text-gray-500">Sun</span>
        </div>
        <div class="mt-4">
          <button class="bg-blue-500 text-white p-2 rounded-lg">7</button>
        </div>
      </div>

      <!-- Summary (Bar Chart) -->
      <div class="bg-white mt-6 p-4 rounded-lg shadow">
        <h3 class="text-lg font-semibold mb-4">Summary</h3>
        <div class="h-48 bg-gray-200 rounded-lg"></div>
      </div>
    </aside>

  </div>

</body>
</html>
