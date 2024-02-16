@props(['specialities' => 'array'])

<select name="role" id="role-select" onchange="showSpecialitiesSelect()"
    class="text-gray-700 bg-white border rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 disabled:opacity-50 w-full px-4 py-2 leading-5 tracking-wide">
    <option value="patient" selected>Patient</option>
    <option value="doctor">Doctor</option>
</select>


<div id="specialities-select-container" style="display: none;">
    <x-input-label for="role" :value="__('Type Of Specialitie')" class="my-2" />
    <select name="speciality" id="speciality-select"
        class="text-gray-700 bg-white border rounded-md cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 disabled:opacity-50 w-full px-4 py-2 leading-5 tracking-wide">
        @foreach ($specialities as $speciality)
            <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
        @endforeach
    </select>
</div>

<script>


    function showSpecialitiesSelect() {
        var roleSelect = document.getElementById('role-select');
        var specialitiesContainer = document.getElementById('specialities-select-container');

        if (roleSelect.value === 'doctor') {
            specialitiesContainer.style.display = 'block';

        } else {
            specialitiesContainer.style.display = 'none';
        }
    }

</script>
