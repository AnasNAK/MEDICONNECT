<x-guest-layout>
    <div class="max-w-md mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl text-center text-white font-extrabold mb-8">Edit Speciality</h1>

        <form action="{{ route('specialities.update', ['speciality' => $speciality->id ] )}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-8">
                <label for="name" class="block text-white text-lg font-semibold mb-2">Speciality Name</label>
                <input type="text" id="name" name="name"
                    class="w-full px-4 py-3 bg-gray-700 text-black rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                    placeholder="Enter speciality name..." value="{{ old('name', $speciality->name) }}">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-md transition-colors duration-300 transform hover:scale-105">Update</button>
        </form>
    </div>
</x-guest-layout>
