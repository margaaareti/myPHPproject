@php($id = Str::uuid())



<div class="form-check float-end">

        <input type="checkbox" {{ $attributes->merge (['value' => 1, 'checked'=> 'false']) }}, class=" form-check-input" id="{{$id}}" >


        <label class="form-check-label" for="{{$id}}">

            {{ $slot }}

        </label>

</div>


