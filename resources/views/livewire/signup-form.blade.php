<div class="flex flex-1 bg-green-100 h-screen justify-center items-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Signup Here</h2>

        <form wire:submit.prevent="register">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Name</label>
                <input type="text" wire:model="name"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email</label>
                <input type="email" wire:model="email"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Mobile</label>
                <input type="number" wire:model="mobile"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Password</label>
                <input type="password" wire:model="password"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-300">
            </div>

            <button type="submit"
                class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600 transition">Signup</button>
        </form>
    </div>
</div>
