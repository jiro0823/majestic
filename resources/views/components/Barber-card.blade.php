@props([
/** @var \mixed */
'barber'
])
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div {{ $attributes->class(['mx-auto w-80 min-w-[300px] mt-5 pb-20 transform overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-lg']) }}>
    <img class="h-48 w-full object-cover object-center" src="{{ asset('storage/' . $barber->image) }}"
        alt="Barber Image" />
    <div class="p-4">
        <h2 class="mb-2 text-lg font-medium text-gray-900">{{ $barber->name }}</h2>
        <p class="mb-2 text-base text-gray-700">{{ $barber->specialization }}</p>

        <div class="fixed pt-9 bottom-2 w-4/5">
            <div class="flex items-center mb-1">
                <div>
                    <p class="mr-2 text-base font-medium text-gray-500">Experience: {{ $barber->experience }} years</p>
                </div>
            </div>
            <a href="{{ route('view-barber', ['slug' => $barber->slug]) }}">
                <x-button>Book Now</x-button>
            </a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
