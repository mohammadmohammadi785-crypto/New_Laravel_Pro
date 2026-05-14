<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen w-full bg-linear-60 from-gray-600 text-white to-black/90 flex justify-center items-center">
        <div class="border w-1/2 p-4 rounded-md">
            @if ($errors->any())
                <div class="w-full flex flex-col gap-2.5">
                    @foreach ($errors->all() as $error)
                        <div class="text-2xl font-bold bg-linear-60 from-orange-400 to-indigo-500 rounded-md p-2 text-white">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <h1 class="text-center text-3xl font-bold">Create User</h1>
            <form action="{{ URL('User/store') }}" method="post" class="flex flex-col gap-3.5">
                @csrf
                <input class="py-2 px-1 border w-full rounded-md focus:outline-0 @error('name') is_invalid @enderror" name="name" placeholder="Please Ener your name" type="text">
                @error('name')
                    <div class="p-2 border rounded-md bg-linear-60 from-red-700 to-gray-700">{{ $message }}</div>
                @enderror
                <input class="py-2 px-1 border w-full rounded-md focus:outline-0" name="email" placeholder="Please Ener your email" type="email">
                <input class="py-2 px-1 border w-full rounded-md focus:outline-0" name="password" placeholder="Please Ener your password" type="password">
                <input class="py-2 px-1 border w-full rounded-md focus:outline-0" name="model" placeholder="Please Ener your Phone Model" type="text">
                <input class="py-2 px-1 border w-full rounded-md focus:outline-0" name="price" placeholder="Please Ener your Phone Price" type="number">
                <input class="p-5 border w-fit rounded-md focus:outline-0" name="color" type="color">
                <input class="py-4 px-5 bg-linear-60 from-gray-500 to-blue-900" type="submit" value="Save">
            </form>
        </div>
    </div>
</body>
</html>