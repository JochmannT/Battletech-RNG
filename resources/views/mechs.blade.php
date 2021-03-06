@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{route('mechs')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-100
                              border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                              placeholder="Name" value="{{old('name')}}">

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="type" class="sr-only">Model</label>
                    <input type="text" name="type" id="type" class="bg-gray-100
                              border-2 w-full p-4 rounded-lg @error('type') border-red-500 @enderror"
                           placeholder="Model" value="{{old('type')}}">

                    @error('type')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                {{--<div class="mb-4">
                    <label for="type" class="sr-only">Type</label>
                    <select name="mech_class" id="mech_class" class="bg-gray-100
                            border-2 w-full p-4 rounded-lg @error('mech_class') border-red-500 @enderror">
                            <option>Light</option>
                    <option>Medium</option>
                    <option>Heavy</option>
                    <option>Assault</option>
                </select>
                    @error('mech_class')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>--}}
                <div class="mb-4">
                    <label for="tonnage" class="sr-only">Mass</label>
                    <input type="number" step="5" min="20" max="100" name="tonnage" id="tonnage" class="bg-gray-100
                              border-2 w-full p-4 rounded-lg @error('tonnage') border-red-500 @enderror"
                           placeholder="Mass 20-100, increments of 5" value="{{old('tonnage')}}">

                    @error('tonnage')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="bv2" class="sr-only">Battlevalue 2.0</label>
                    <input type="number" name="bv2" id="bv2" class="bg-gray-100
                              border-2 w-full p-4 rounded-lg @error('bv2') border-red-500 @enderror"
                           placeholder="Battlevalue 2.0" value="{{old('bv2')}}">

                    @error('bv2')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="bv1" class="sr-only">Battlevalue 1.0</label>
                    <input type="number" name="bv1" id="bv1" class="bg-gray-100
                              border-2 w-full p-4 rounded-lg @error('bv1') border-red-500 @enderror"
                           placeholder="Battlevalue 1.0" value="{{old('bv1')}}">

                    @error('bv1')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="cbills" class="sr-only">C-Bills</label>
                    <input type="number" name="cbills" id="cbills" class="bg-gray-100
                              border-2 w-full p-4 rounded-lg @error('cbills') border-red-500 @enderror"
                           placeholder="C-Bills" value="{{old('cbills')}}">

                    @error('cbills')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded
                    font-medium">Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
