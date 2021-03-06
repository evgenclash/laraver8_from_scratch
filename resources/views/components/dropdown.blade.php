@props(['trigger'])


    <div x-data="{ show: false }" @click.away="show = false">
{{--trigger--}}
        <div @click="show = ! show">
            {{$trigger}}
        </div>

{{--links--}}
        <div x-show="show" class="py-2 absolute max-h-52 overflow-auto w-full bg-gray-100 rounded-xl z-50" style="display: none">

            {{$slot}}

        </div>
    </div>

